<!DOCTYPE html>
<?php require "includes/config.inc.php"; ?>

<head>
	<?php require "includes/head.inc.php"; ?>
</head>

<body>
	<div>
		<section>
			<h1>Cadastro</h1>
			<form action="includes/cadastro.inc.php" method="post">
				<input type="text" name="username" id="" placeholder="Nome de Usuario">
				<input type="text" name="email" id="" placeholder="E-mail">
				<input type="password" name="senha" id="" placeholder="Senha">
				<input type="password" name="senha-conf" id="" placeholder="Confirmar Senha">
				<button type="submit" name="cadastrar" class="button button-primary cta">Cadastrar</button>
			</form>
		</section>
	</div>

	<!-- Java Script  -->
	<?php include "includes/javascript.inc.php"; ?>
</body>