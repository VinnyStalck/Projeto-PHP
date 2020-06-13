<!DOCTYPE html>
<?php require "includes/config.inc.php"; ?>

<head>
	<?php require "includes/head.inc.php"; ?>
</head>

<body>
	<!-- header  -->
	<?php include "includes/header.inc.php"; ?>

	<section id="about">
		<div class="row about-intro">
			<h1>Cadastro</h1>
			<form action="includes/cadastro.inc.php" method="post">
				<input type="text" name="username" id="" placeholder="Nome de Usuario">
				<input type="text" name="email" id="" placeholder="E-mail">
				<input type="password" name="senha" id="" placeholder="Senha">
				<input type="password" name="senha-conf" id="" placeholder="Confirmar Senha">
				<button type="submit" name="envia-cadastro" class="button button-primary">Cadastrar</button>
			</form>
		</div>
	</section>

	<!-- footer  -->
	<?php include "includes/footer.inc.php"; ?>

	<!-- Java Script  -->
	<?php include "includes/javascript.inc.php"; ?>
</body>