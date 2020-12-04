<?php
include ('funciones-conexion.php');
$conexion = conectar();

if ($conexion && isset($_POST['id'])){
    $query = 'UPDATE empleados SET ' ;
    foreach ($_POST as $clave => $valor) {
        if (!empty($valor) && $clave != 'id') {
            $query .= $clave . '= "' . $valor . '", ';
        }
    }

    if (!empty($_FILES['foto']['name'])) {
        $nombre_foto =  explode('.' ,$_FILES['foto']['name']);
        var_dump($nombre_foto);
    
        # Convierto el arreglo en un string para guardarlo en una variable.
        $_FILES['foto']['name'] = $_POST['apellido'] . date_format(date_create($_POST['fecha_nacimiento']), 'Y-M') . '.' . $nombre_foto[count($nombre_foto) - 1];
        $nombre_foto = $_FILES['foto']['name'];
        $query .= 'foto= "' . $nombre_foto . '" ';
    }

    $query .= 'WHERE id = ' . $_POST['id'] . ';';
    $query = str_replace(", WHERE" , " WHERE", $query);

    echo $query;
    $request = mysqli_query($conexion, $query);

    if ($request) {
        # Muevo la imagen solo si la consulta se ejecutó correctamente
        move_uploaded_file($_FILES['foto']['tmp_name'], '../fotos/' . $nombre_foto);  
        header('refresh:0;url=../index.php');
        desconectar($conexion);
    } else {
        echo '<p>No se pudo actualizar el usuario</p>';
        desconectar($conexion);
        header('refresh:3;url=../index.php');
    }

} else {
    echo '<p>No se pudo actualizar el usuario.</p>';
    desconectar($conexion);
    header('refresh:3;url=../index.php');
}
?>