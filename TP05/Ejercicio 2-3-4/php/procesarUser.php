<?php
function incorrecto(){
    echo '<h2>Datos incorrectos</h2>
    <p>Intentelo otra vez...</p>';
    #header('refresh:3 ; url=../html/login.html');
}
include '../html/headerInt.html';

if (!empty($_POST['usuario']) &&
    !empty($_POST['password']))
{
    include('funciones.php');

    if (esUsuario($_POST['usuario'], $_POST['password'])){
        echo '<div class="container">
                <a class="btn btn-danger btn-lg w-40 btn-block" href="../html/formulario.html">Alta Pelicula</a>
                <a class="btn btn-danger btn-lg w-40 btn-block" href="../index.php">Listado Peliculas</a>
                <a class="btn btn-danger btn-lg w-40 btn-block" href="../php/destacadas.php">Peliculas Destacadas</a>
              </div>';
    } else {
        incorrecto();
    }
} else {
    incorrecto();
}
include '../html/footerInt.html';
?>