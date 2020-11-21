<?php
function conectar($db){
    $conexion = mysqli_connect('localhost', 'root', '', $db);
    if (!$conexion) {
        echo "<p>Error al conectar.</p>";
    } else {
        return $conexion;
    }
}

function desconectar($conexion){
    if ($conexion) {
        $desconexion = mysqli_close($conexion);
        if (!$desconexion) {
            echo '<p>Error al intentar desconectar.</p>';
        }
    } else {
        echo '<p>No se puede desconectar, no existe conexión.</p>';
    }
}
?>