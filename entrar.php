<!DOCTYPE html>
<?php require "includes/config.inc.php"; ?>

<html>

<head>
	<?php require "includes/head.inc.php"; ?>
</head>

<body>
	<!-- header  -->
	<?php include "includes/header.inc.php"; ?>

	<section id="about">
		<div class="row about-intro">
			<h1>Login</h1>

			<?php
			if (isset($_GET['sucesso'])) {
				switch ($_GET['sucesso']) {
					case 'cadastro':
						alerta(
							'success',
							'<p>Inscrição feita com sucesso</p>
							<p>Agora você pode entrar na sua conta</p>'
						);
						break;
					default:
						break;
				}
			}

			if (isset($_GET['erro'])) {
				switch ($_GET['erro']) {
					case 'campovazio':
						alerta('error', '<p>Nenhum campo pode estar vazio!</p>');
						break;
					case 'usuarioinexistente':
						alerta('error', '<p>Usuário inexistente!</p>');
						alerta('info', '<p>Se você não está inscrito se cadastre nesse link <a href="cadastro.php">nesse link</a>.</p>');
						break;
					case 'senhaincorreta':
						alerta('error', '<p>A senha inserida está incorreta!</p>');
						break;
					case 'conexaosql':
						alerta(
							'error', 
							'<p>Ocorreu um erro na conexão com o banco de dados!</p>
							<p>Por favor tente novamente.</p>'
						);
						break;

					default:
						alerta(
							'error',
							'<p>Ocorreu algum erro inesperado!</p>
							<p>Por favor tente novamente.</p>'
						);
						break;
				}
			}
			?>

			<form action="includes/entrar.inc.php" method="post">
				<input type="text" name="username" id="" placeholder="Email ou Nome de Usuario">
				<input type="password" name="senha" id="" placeholder="Senha">
				<button type="submit" name="envia-entrada" class="button button-primary">Entrar</button>
			</form>
		</div>
	</section>

	<!-- footer  -->
	<?php include "includes/footer.inc.php"; ?>

	<div id="preloader">
		<div id="loader"></div>
	</div>

	<!-- Java Script  -->
	<?php include "includes/javascript.inc.php"; ?>
</body>

</html>