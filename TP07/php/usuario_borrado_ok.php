<?php
include ('conexion.php');
$conexion = conectar('peliculas');

if ($conexion && $_GET['id']){
    $query = mysqli_query($conexion, 'DELETE FROM usuarios WHERE id = \'' . $_GET['id'] . '\'');
} else {
    echo '<p>No se pudo elimninar el usuario.</p>';
    header('refresh:3;url=listado_usuarios.php');
}

desconectar($conexion);

header('refresh:0;url=listado_usuarios.php');
?>