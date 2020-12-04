<?php
session_start();
if (!empty($_SESSION['apellido'])) {
    require '../html/cabecera.html';
    require '../html/menu.html';

    echo '<p>Apellido: ' . $_SESSION['apellido'] . '</p>
    <p>Sueldo: $' . $_SESSION['sueldo'] . '</p>';
} else {
    echo '<h2>No se pudo realizar la operación</h2>';
    header ('refresh: 3 ; ../index.php');
}
?>