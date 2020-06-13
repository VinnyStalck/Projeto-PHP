	<header id="header" class="row">

		<div class="header-logo">
			<a href="index.php">Hexagon</a>
		</div>

		<nav id="header-nav-wrap">
			<ul class="header-main-nav">
				<li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
				<li><a class="smoothscroll" href="#about" title="about">Sobre</a></li>
				<li><a class="smoothscroll" href="#pricing" title="pricing">Preços</a></li>
				<li><a class="smoothscroll" href="#testimonials" title="testimonials">Inscrições</a></li>
				<li><a class="smoothscroll" href="#download" title="download">Download</a></li>
			</ul>

			<?php
			if (isset($_SESSION['userid'])) {
				echo '<a href="includes/sair.inc.php" title="Logout" class="button button-primary cta">Sair</a>';
			} else {
				echo '
					<a href="entrar.php" title="Login" class="button button-primary cta">Entrar</a>
					<a href="cadastro.php" title="Sign-up" class="button button-primary cta">Inscreva-se</a>
				';
			}
			?>
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>
	</header>