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
				<h1>Cadastro</h1>

				<?php
				if (isset($_GET['erro'])) {
					switch ($_GET['erro']) {
						case 'campovazio':
							echo '<p class="erro">Nenhum campo pode estar vazio!</p>';
							break;
						case 'usernameemailinvalido':
							echo '<p class="erro">Nome de Usuário inválido!</p>';
							echo '<p class="aviso">São permitidos somente Letras minúsculas, maiúsculas e números no nome de usuário.</p>';
							echo '<p class="erro">Email inválido!</p>';
							echo '<p class="aviso">Verifique se foi inserido o email corretamente.</p>';
							break;
						case 'usernameinvalido':
							echo '<p class="erro">Nome de Usuário inválido!</p>';
							echo '<p class="aviso">São permitidos somente Letras minúsculas, maiúsculas e números no nome de usuário</p>';
							break;
						case 'emailinvalido':
							echo '<p class="erro">Email inválido!</p>';
							echo '<p class="aviso">Verifique se foi inserido o email corretamente.</p>';
							break;
						case 'confirmasenha':
							echo '<p class="erro">As senhas não conferem!</p>';
							echo '<p class="aviso">Por favor insira a mesma senha.</p>';
							break;
						case 'usernameutilizado':
							echo '<p class="erro">O nome de usuário já está sendo utilizado!</p>';
							echo '<p class="aviso">Por favor insira um nome de usuário único.</p>';
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
	
		<div id="preloader">
			<div id="loader"></div>
		</div>
	
		<!-- Java Script  -->
		<?php include "includes/javascript.inc.php"; ?>
	</body>
</html>