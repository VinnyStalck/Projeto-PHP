<?php

if (isset($_POST['envia-cadastro'])) {
	# Conecta com o BD
	require "conexao.inc.php";

	# Pega informações do formulário
	$username = $_POST['username'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senha2 = $_POST['senha-conf'];

	# Verifica campos vazios
	if (empty($username) || empty($email) || empty($senha) || empty($senha2)) {
		header("Location: ../cadastro.php?erro=campovazio&username=".$username."&email=".$email);
		exit();
	}
	# Verifica Nome de usuário e Email
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../cadastro.php?erro=usernameemailinvalido");
		exit();
	} 
	# Verifica Nome de usuário
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../cadastro.php?erro=usernameinvalido&email=" . $email);
		exit();
	}
	# Verifica Email
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../cadastro.php?erro=emailinvalido&username=" . $username);
		exit();
	}
	# Verifica confirmação de Senha
	elseif ($senha !== $senha2) {
		header("Location: ../cadastro.php?erro=confirmasenha&username=" . $username . "&email=" . $email);
		exit();
	}
	# Verifica se Nome de usuário é único
	else {
		$sql = "SELECT username FROM inscricoes WHERE username=?";
		$stmt = mysqli_stmt_init($conexao);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../cadastro.php?erro=conexaosql");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$verificaResultados = mysqli_stmt_num_rows($stmt);
			if ($verificaResultados > 0) {
				header("Location: ../cadastro.php?erro=usernameutilizado");
				exit();
			} else {
				$sql = "INSERT INTO inscricoes (username, email, senha) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conexao);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../cadastro.php?erro=conexaosql");
					exit();
				} else {
					# Encripta senha
					$senhaEncriptada = password_hash($senha, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $senhaEncriptada);
					mysqli_stmt_execute($stmt);

					header("Location: ../entrar.php?sucesso=cadastro");
					exit();
				}
			}
		}
	}
	# Desconectar com o BD
	mysqli_stmt_close($stmt);
	mysqli_close($conexao);
} else {
	header("Location: ../cadastro.php");
	exit();
}