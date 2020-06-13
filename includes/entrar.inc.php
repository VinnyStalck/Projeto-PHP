<?php

if (isset($_POST['envia-entrada'])) {
	# Conecta com o BD
	require "conexao.inc.php";

	# Pega informações do formulário
	$user = $_POST['username'];
	$senha = $_POST['senha'];

	# Verifica campos vazios
	if (empty($user) || empty($senha)) {
		header("Location: ../entrar.php?error=campovazio&username=" . $user);
		exit();
	} else {
		# 
		$sql = "SELECT * FROM inscricoes WHERE username=? OR email=?;";
		$stmt = mysqli_stmt_init($conexao);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../entrar.php?error=conexaosql");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "ss", $user, $user);
			mysqli_stmt_execute($stmt);
			$resultado = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($resultado)) {
				$checarSenha = password_verify($senha, $row['senha']);
				if ($checarSenha == false) {
					header("Location: ../entrar.php?error=senhaincorreta");
					exit();
				} elseif ($checarSenha == true) {
					# Inicia sessão
					session_start();
					$_SESSION["userid"] = $row['id'];
					$_SESSION["username"] = $row['username'];

					header("Location: ../index.php?entrada=sucesso");
					exit();
				} else {
					header("Location: ../entrar.php?error=senhaincorreta");
					exit();
				}
			} else {
				header("Location: ../entrar.php?error=usuarioinexistente");
				exit();
			}
		}
	}
} else {
	header("Location: ../entrar.php");
	exit();
}
