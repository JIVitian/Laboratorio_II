<?php
session_start();
if (!empty($_SESSION['usuario'])) {
    session_destroy();
    header('refresh:0;../index.html');
} else {
    echo '<h2>No se inició sesión</h2>';
    header('refresh:3; ../index.html');
}
?>