<?php
include 'funciones-conexion.php';

$conexion = conectar();
if ($conexion) {
    session_start();

    $consulta = 'SELECT apellido, sueldo FROM empleados WHERE dni = ' . $_POST['dni'];
    $query = mysqli_query($conexion, $consulta);
    $numFilas = mysqli_num_rows($query);
    desconectar($conexion);
    if ($query &&  $numFilas > 0) {
        $fila = mysqli_fetch_array($query);
        $_SESSION['apellido'] = $fila['apellido'];
        $_SESSION['sueldo'] = $fila['sueldo'];
        header('refresh:0;url=estado-sesion.php');
    } else {
        echo '<h2>No hay ningun empleado con ese id</h2>';
        header('refresh:3;url=../index.php');
    }
} else {
    echo '<h2>Ocurrió un error</h2>';
    header('refresh:3;url=../index.php');
}
?>