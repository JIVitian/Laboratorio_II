<!--
    LABORATORIO II - TRABAJO PRACTICO 5 - Jorge Iván Vitian

    Hice este trabajo probando el Framework BOOTSTRAP como complemento para mi CSS, tambien probé
    algunas practicas que no se si son las mejores o no. Si ve que hay algo que se pueda
    hacer de una manera mas eficiente o estilizada y/o use malas practicas agradecería que me lo avise.
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <!--MetaTags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Iván, Vitian">

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--FavIcon-->
    <link rel="shortcut icon" href="img/estrella.png" type="image/x-icon">

    <!--Titulo-->
    <title>PiraPelis.com</title>
</head>

<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="color: white;">
            <a class="navbar-brand" href="#">PiraPelis.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Lista Peliculas<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/destacadas.php">Destacadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/formulario.html">Alta Pelicula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/login.html">Ingresar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>
        <section>
            <article class="container">
                <?php
                #Todas las funciones están dentro de funciones.php
                include('php/funciones.php');
                $file = leerTxt('txt/', 'peliculas.txt');

                #Compruebo que el archivo ingresado no este vacío
                if (!empty($file)) {
                    #Muestro todo el contenido de la página desde aquí para que las funciones solo devuelvan valores
                    for ($i = 0 ; $i < sizeof($file) ; $i++){
                        echo '<div class="row justify-content-center">
                                <div class="contenedor col-sm-9 col-md-8 col-md-6">
                                    <figure class="caratula col-sm-8 col-md-6 col-md-6">
                                        <img src="img/caratulas/' . $file[$i][4] . '" alt="Caratula de la pelicula" class="caratula__img">
                                    </figure>
                                    <div class="info col-sm-4 col-md-6 col-lg-6">';
                        
                        #Si es que la pelicula fue marcada como destacada se mostrará una estrella arriba del titulo.
                        if ($file[$i][3] == 'Destacado'){
                            echo '<img src="img/estrella.png" alt="Pelicula Destacada" class="star">';
                        }
                        
                        echo '<h2>' . $file[$i][0] . '</h2>';
                        echo '<p>Genero: ' . $file[$i][1] . '</p>';
                        echo '<p>Fecha de estreno: ' . $file[$i][2] . '</p></div>';
                        echo '</div></div><hr>';
                    }
                } else { #Si no hubiese nada en el archivo entonces se mostrará una 
                    echo '<h2>No hay peliculas cargadas</h2>
                        <p>Intente agregando alguna pelicula desde <a href="html/formulario.html">Aquí</a>.</p>';
                }
                ?>
            </article>
        </section>
    </main>

    <footer class="page-footer font-small text-center bg-dark mt-5 p-2">
        <a href="https://facetvirtual.facet.unt.edu.ar/course/view.php?id=185" style="text-decoration:none; color:white;">Laboratorio II - 2020</a>
    </footer>

    <!--SCRIPTS BOOTSTRAP-->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>