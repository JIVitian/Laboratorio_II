<?php
if (!empty($_POST['usuario']) &&
    !empty($_POST['password']) &&
    !empty($_POST['mail']) &&
    !empty($_POST['tipo'])) {
    
    include ("conexion.php");

    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $mail = $_POST['mail'];
    $tipo = $_POST['tipo'];
    $nombre_foto =  $_FILES['foto']['name'];
    $ubicacion_foto = $_FILES['foto']['tmp_name'];
    $destino_foto = '../img/fotos_perfil';

    #Reviso que exista la carpeta en donde
    #se guardaran las fotos de los usuarios
    if (!file_exists($destino_foto)) {
        mkdir($destino_foto);
    }
    
    #Muevo la imagen a la carpeta de fotos de perfil
    move_uploaded_file($ubicacion_foto, $destino_foto . '/' . $nombre_foto);

    $conexion = conectar('peliculas');
    
    $consulta = 'INSERT INTO usuarios (id, usuario, password, mail, fecha_alta, tipo, foto)
                 VALUES (\'' . null . '\', \'' . trim($usuario) . '\', \'' . $password . '\',
                 \'' . trim($mail) . '\', \'' . date('Y-m-d') . '\', \'' . $tipo . '\', \'' . $nombre_foto . '\')';

    $query = mysqli_query($conexion, $consulta);

    if ($query) {
        header('refresh:0;url=alta_usuario.php');
    } else {
        echo '<p>No se pudo realizar la inserción correctamente</p>';
        header('refresh:3;url=alta_usuario.php');
    }

    desconectar($conexion);
} else {
    echo '<p>Dato faltante para realizar el registro</p>';
    header('refresh:3;url=alta_usuario.php');
}
?>