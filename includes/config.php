<?php

switch ($_SERVER["SCRIPT_NAME"]) {
    case 'login.php':
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