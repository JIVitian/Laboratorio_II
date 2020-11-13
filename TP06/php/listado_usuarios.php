<?php
include ("../html/headerInt.html");
include ('menu.php');
echo '</article>
  <article class="php__article">';

include ('conexion.php');

$conexion = conectar('peliculas');
$query = 'SELECT * FROM usuarios';
$request = mysqli_query($conexion, $query);
$numFilas = mysqli_num_rows($request);

echo '<h2 class="lista__titulo">Lista de Usuarios Registrados</h2>
<table class="lista__tabla">
    <thead>
        <tr class="lista__fila">
            <th class="lista__col" scope="col">Usuario</th>
            <th class="lista__col" scope="col">Mail</th>
            <th class="lista__col" scope="col">Fecha_Alta</th>
            <th class="lista__col" scope="col">Tipo</th>
        </tr>
    </thead>
    <tbody>';
if ($numFilas == 0){
    echo '<tr class="lista__fila">
        <td class="lista__celda">-</td>
        <td class="lista__celda">-</td>
        <td class="lista__celda">-</td>
        <td class="lista__celda">-</td>
    </tr>';
} else {
    while ($fila = mysqli_fetch_array($request)) {
        $fecha = date_create($fila['fecha_alta']);
        $fecha = date_format($fecha, 'd-m-Y');
        echo '<tr class="lista__fila">
            <td class="lista__celda">' . $fila['usuario'] . '</td>
            <td class="lista__celda">' . $fila['mail'] . '</td>
            <td class="lista__celda">' . $fecha . '</td>
            <td class="lista__celda">' . $fila['tipo'] . '</td>
        </tr>';
    }
    echo '</tbody>
        </table>';
}

include ('../html/footerInt.html');
?>