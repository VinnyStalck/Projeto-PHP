<!--[if lt IE 9 ]><html class="no-js oldie" lang="pt-br"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="pt-br"><!--<![endif]-->

<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	case 'entrar.php':
		$pagina = "Login";
		$paginaTitulo = "Login - Hexagon";
		break;
	case 'cadastro.php':
		$pagina = "Cadastro";
		$paginaTitulo = "Cadastro - Hexagon";
		break;
	default:
		$pagina = "Index";
		$paginaTitulo = "Hexagon";
		break;
}
?>