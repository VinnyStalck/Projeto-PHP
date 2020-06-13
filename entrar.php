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