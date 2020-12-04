<?php
    echo '</article>
    <article class="php__article">';

    include ('funciones-conexion.php');

    $conexion = conectar();
    $query = 'SELECT * FROM empleados';
    $request = mysqli_query($conexion, $query);
    $numFilas = mysqli_num_rows($request);

    echo '<h2>Lista de empleados Registrados</h2>
    <table>
        <thead>
            <tr class="lista__fila">
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">DNI</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Foto</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>';
    if ($numFilas == 0){
        echo '<tr class="lista__fila">
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>';
    } else {
        while ($fila = mysqli_fetch_array($request)) {
            $fecha = date_create($fila['fecha_nacimiento']);
            $fecha = date_format($fecha, 'd-m-Y');
            echo '<tr">
                <td>' . $fila['apellido'] . '</td>
                <td>' . $fila['nombre'] . '</td>
                <td>' . $fila['dni'] . '</td>
                <td>' . $fecha . '</td>
                <td>' . $fila['sueldo'] . '</td>
                <td><img class="img-tabla" src="fotos/'. $fila['foto'] . '" alt="foto de empleado"></td>
                <td><a href="php/actualiza.php?id=' . $fila['id'] . '"><img class="img-tabla" src="img/edit_pencil.png" alt="pequeña imagen de un lapiz"></a></td>
                <td><a href="php/borra.php?id=' . $fila['id'] . '"><img class="img-tabla" src="img/trash_empty.png" alt="pequeña imagen de un cubo de basura"></a></td>
            </tr>';
        }
        desconectar($conexion);
        echo '</tbody>
            </table>';
        }
?>