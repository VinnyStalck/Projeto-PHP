<!DOCTYPE html>
<?php require "includes/config.inc.php"; ?>

<head>
	<?php require "includes/head.inc.php"; ?>
</head>

<body>
	<div>
		<section>
			<h1>Login</h1>
			<form action="includes/cadastro.inc.php" method="post">
				<input type="text" name="username" id="" placeholder="Email ou Nome de Usuario">
				<input type="password" name="senha" id="" placeholder="Senha">
				<button type="submit" name="entrar" class="button button-primary">Entrar</button>
			</form>
		</section>
	</div>

	<!-- Java Script  -->
	<?php include "includes/javascript.inc.php"; ?>
</body>