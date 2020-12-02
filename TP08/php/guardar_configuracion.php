<?php
session_start();
if (!empty($_POST) && !empty($_SESSION['usuario'])) {
    $estilo = $_POST['estilo'];
    $usuario = $_SESSION['usuario'];
    $tiempo_expira = time() + 30 * 24 * 60 * 60; # 30 días
    setcookie($usuario, $estilo, $tiempo_expira, '/');
    header('refresh:0; url=listado_usuarios.php');
} else {
    echo '<h1>No se inicio Sesión.</h1>';
    header('refresh:3; url=../index.html');
}
?>