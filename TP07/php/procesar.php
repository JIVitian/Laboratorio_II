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

    if (!empty($_FILES['foto']['name'])) {
        # Separo el nombre de la imagen en un arreglo con el
        # nombre en el indice 0 y la extensión en el 1.
        $nombre_foto =  explode('.' ,$_FILES['foto']['name']);
    
        # Convierto el arreglo en un string para guardarlo en una variable.
        $_FILES['foto']['name'] = $usuario . '.' . $nombre_foto[count($nombre_foto) - 1];
        $nombre_foto = $_FILES['foto']['name'];
    
        # Obtengo la ubicación de la imagen
        $ubicacion_foto = $_FILES['foto']['tmp_name'];
        $destino_foto = '../img/fotos_perfil';
    
        # Reviso que exista la carpeta en donde
        # se guardaran las fotos de los usuarios
        if (!file_exists($destino_foto)) {
            mkdir($destino_foto);
        }
        
        # Muevo la imagen a la carpeta de fotos de perfil
        move_uploaded_file($ubicacion_foto, $destino_foto . '/' . $nombre_foto);
    } else {
        if (!file_exists('../img/fotos_perfil/avatar_default.png')) { 
            copy('../img/avatar_default.png', '../img/fotos_perfil/avatar_default.png');
        }
        $nombre_foto = 'avatar_default.png';
    }

    $conexion = conectar('peliculas');
    
    $consulta = 'INSERT INTO usuarios (id, usuario, password, mail, fecha_alta, tipo, foto)
                 VALUES (\'' . null . '\', \'' . trim($usuario) . '\', \'' . $password . '\',
                 \'' . strtolower(trim($mail)) . '\', \'' . date('Y-m-d') . '\', \'' . $tipo . '\', \'' . $nombre_foto . '\')';

    $query = mysqli_query($conexion, $consulta);

    if ($query) {
        header('refresh:0;url=listado_usuarios.php');
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