<?php
if (!empty($_POST['usuario']) &&
    !empty($_POST['password'])) {
    
    include ("conexion.php");
    $conexion = conectar('peliculas');

    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    $consulta = 'SELECT usuario, password
                 FROM usuarios
                 WHERE usuario = \'' . $usuario . '\' AND 
                 password = \'' . $password . '\'';

    $resultado = mysqli_query($conexion, $consulta);

    # Si hay mas de una fila devuelta por la consulta entoc
    if (mysqli_num_rows($resultado) > 0) {
        header('refresh:0 ; url=listado_usuarios.php');
        desconectar($conexion);
    } else {
        echo '<p>Este usuario no se encuentra registrado</p>';
        header('refresh:3 ; url=../index.html');
        desconectar($conexion);
    }
} else {
    echo '<p>Datos Incorrectos, intentelo de nuevo</p>';
    header('refresh:3 ; url=../index.html');
}
?>