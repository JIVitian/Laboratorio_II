<?php
include ('../html/HeaderInt.html');
include('funciones.php');

if (!empty($_POST['usuario']) &&
    !empty($_POST['password']) &&
    esUsuario($_POST['usuario'], $_POST['password'])) {
    //Queda medio feo pero cumple con lo que pide el enunciado
    echo '<div class="w-25 container mt-5 d-flex flex-column justify-content-center" style="height: 72.5vh">
            <a class="btn btn-danger btn-lg mb-2" href="../html/formulario.html">Alta Pelicula</a>
            <a class="btn btn-danger btn-lg mb-2" href="../index.php">Listado Peliculas</a>
            <a class="btn btn-danger btn-lg" href="../php/destacadas.php">Peliculas Destacadas</a>
          </div>';
} else {
    echo '<div class="container" style="height: 80vh">
            <h1>Datos incorrectos</h1>
            <p>Intentelo otra vez...</p>
          </div>';
    header('refresh:3 ; url=../html/login.html');
}
include '../html/footerInt.html';
?>