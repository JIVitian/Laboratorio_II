<?php
    require '../html/cabecera.html';
    require '../html/menu.html';
?>

<?php
    
    require 'funciones-conexion.php';
    $conexion = conectar();

    //hacer controles
    if ($conexion && !empty($_GET['id'])) {
        // completar código
        $consulta = 'SELECT * FROM empleados WHERE id = ' . $_GET['id'];
        $query = mysqli_query($conexion, $consulta);
        $fila = mysqli_fetch_array($query);

        desconectar($conexion);
?>
    <main>
        <h3>Actualizar emplado</h3>
        <form action="actualiza_ok.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $fila['nombre']?>" id="nombre" maxlength="60" required><br>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" value="<?php echo $fila['apellido']?>" id="apellido" maxlength="30" required><br>
            <label for="dni">DNI</label>
            <input type="text" name="dni" value="<?php echo $fila['dni']?>" id="dni" maxlength="8" required><br>
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" value="<?php echo $fila['fecha_nacimiento']?>" id="fecha_nacimiento" required><br>
            <label for="sueldo">Sueldo</label>
            <input type="number" name="sueldo" value="<?php echo $fila['sueldo']?>" id="sueldo" min="1" step="0.01" required><br>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" accept="image/*" required><br>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
<?php
} else {
    echo '<h2>No se pudo encontrar el empleado que desea actualizar</h2>';
    header('refresh:3 ; url=../index.php');
}
?>
</html>