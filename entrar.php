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
						echo  '<p class="sucesso">Inscrição feita com sucesso</p>';
						echo  '<p class="sucesso">Agora você pode entrar na sua conta</p>';
						break;
					default:
						break;
				}
			}

			if (isset($_GET['erro'])) {
				switch ($_GET['erro']) {
					case 'campovazio':
						echo '<p class="erro">Nenhum campo pode estar vazio!</p>';
						break;
					case 'usuarioinexistente':
						echo '<p class="erro">Usuário inexistente!</p>';
						echo '<p>Se você não está inscrito se cadastre nesse link <a href="cadastro.php">nesse link</a>.</p>';
						break;
					case 'senhaincorreta':
						echo '<p class="erro">A senha inserida está incorreta!</p>';
						break;
					case 'conexaosql':
						echo '<p class="erro">Ocorreu um erro na conexão com o banco de dados!</p>';
						echo '<p>Por favor tente novamente.</p>';
						break;

					default:
						echo '<p class="erro">Ocorreu algum erro inesperado!</p>';
						echo '<p>Por favor tente novamente.</p>';
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