<?php
session_start();
include ("conexion.php");
$conexion = conectar('peliculas');

if (!empty($_POST['usuario']) &&
    !empty($_POST['password']) && $conexion) {
    
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    $consulta = 'SELECT usuario, foto
                 FROM usuarios
                 WHERE usuario = \'' . $usuario . '\' AND 
                 password = \'' . $password . '\'';

    $resultado = mysqli_query($conexion, $consulta);

    # Si hay mas de una fila devuelta por la consulta entoc
    if (mysqli_num_rows($resultado)) {
        $fila = mysqli_fetch_array($resultado);
        desconectar($conexion);
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['foto'] = $fila['foto'];
        echo 'Logeo Exitoso';
        header('refresh:0;url=listado_usuarios.php');
    } else {
        echo '<p>Este usuario no se encuentra registrado</p>';
        desconectar($conexion);
        header('refresh:3 ; url=../index.html');
    }
} else {
    echo '<p>Datos Incorrectos, intentelo de nuevo</p>';
    header('refresh:3 ; url=../index.html');
}
?>