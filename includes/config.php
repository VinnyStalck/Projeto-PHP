<?php

switch ($_SERVER["SCRIPT_NAME"]) {
    case 'portifolio.php':
        $pagina = "Portifolio";
        $paginaTitulo = "Portifólio - Hexagon";
        break;
    
    default:
        $pagina = "Index";
        $paginaTitulo = "Hexagon";
        break;
}