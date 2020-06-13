<meta charset="utf-8">
<title><?php print $paginaTitulo; ?></title>
<meta name="author" content="StalckVinny">

<!-- Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
switch ($pagina) {
    case 'Login': ?>
        <meta name="description" content="" />
        <meta name="keywords" content="login" />
    <?php break;
    case 'Cadastro': ?>
        <meta name="description" content="" />
        <meta name="keywords" content="cadastro" />
    <?php break;

    default: ?>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
<?php break;
}
?>

<!-- CSS -->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/vendor.css">
<link rel="stylesheet" href="css/main.css">

<!-- Script -->
<script src="js/modernizr.js"></script>
<script src="js/pace.min.js"></script>

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<link rel="icon" href="favicon.png" type="image/x-icon">