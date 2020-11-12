<?php
if (!empty($_POST['usuario']) &&
    !empty($_POST['password'])) {
    
    include ("conexion.php");
    $conexion = conectar('peliculas');
    
    var_dump($_POST);

    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    $consulta = 'SELECT usuario, password
                 FROM usuarios
                 WHERE usuario = \'' . $usuario . '\' AND 
                 password = \'' . $password . '\'';

    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        echo '<p>Este usuario existe</p>';
    } else {
        echo '<p>Este usuario no se encuentra registrado</p>';
    }

    desconectar($conexion);
} else {
    echo '<p>Datos Incorrectos, intentelo de nuevo</p>';
    header('refresh:3 ; url=../html/login.html');
}
?>