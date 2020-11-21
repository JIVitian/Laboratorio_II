<?php
include ('../html/headerInt.html');
include ('menu.php');
include ('conexion.php');

$conexion = conectar ('peliculas');

echo '</article><article class="php__article">';

if ($conexion && !empty($_GET['id'])){
    $request = mysqli_query($conexion, 'SELECT usuario FROM usuarios WHERE id= \'' . $_GET['id'] . '\'');
    
    desconectar ($conexion);
    $fila = mysqli_fetch_array($request);
    
    echo '<h2 class="lista__titulo">Borrado de Usuario</h2>
        <p class="parrafo__centrado">¿Esta seguro de querer eliminar el usuario ' . $fila['usuario'] . '?</p>
        <section class="botonera">
          <a href="usuario_borrado_ok.php?id=' . $_GET['id'] . '"><button class="confirmacion__boton">Aceptar</button></a>
          <a href="listado_usuarios.php"><button class="confirmacion__boton">Cancelar</button></a>
        </section>';
        
} else {
    echo '<p>El usuario elegido no se encuentra en la base de datos.</p>';
    header('refresh:3;url=listado_usuarios.php');
}
include ('../html/footerInt.html');
?>