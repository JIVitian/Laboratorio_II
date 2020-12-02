<!DOCTYPE html>
<html lang="es">
<head>
    <!--MetaTags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Iván, Vitian">

    <!--CSS-->
    <link rel="stylesheet" href="../css/normalize.css">
    <?php
    if (isset($_COOKIE[$_SESSION['usuario']]) && $_COOKIE[$_SESSION['usuario']] == 'moderno') {
        echo '<link rel="stylesheet" href="../css/estiloModerno.css">';
    } else {
        echo '<link rel="stylesheet" href="../css/estilo.css">';
    }
    ?>
    

    <!--FavIcon-->
    <link rel="shortcut icon" href="../img/estrella.png" type="image/x-icon">

    <!--Titulo-->
    <title>PiraPelis.com</title>
</head>

<body>
    <header class="php__header">
        <h1 class="php__h1">PiraPelis</h1>
    </header>

    <body>
        <main class="php__main">
            <section class="php__section">
                <article class="menu__aricle">