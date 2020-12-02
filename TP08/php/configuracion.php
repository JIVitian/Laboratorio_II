<?php
session_start();
if(!empty($_SESSION['usuario'])){
    include 'headerInt.php';
    include ('menu.php');
    $estilo = $_COOKIE[$_SESSION['usuario']];

    echo '</article><article class="php__article">
    <h2 class="config__h2">Configuración</h2>
    <form class="config__form" action="guardar_configuracion.php" method="post">
        <label class="config__label" for="config1">
            <input class="config__check" type="radio" name="estilo" id="config1" value="clasico"' . (($estilo == 'clasico') ? ' checked' : '') . '>
            Clásico
        </label>
        <figure class="config__figure">
            <img class="config__image" src="../img/clasico.jpg" alt="Vista de la vista clasica">
        </figure>
        <label class="config__label" for="config2">
            <input class="config__check" type="radio" name="estilo" id="config2" value="moderno"' . (($estilo == 'moderno') ? ' checked' : '') . '>
            Moderno
        </label>
        <figure class="config__figure">
            <img class="config__image" src="../img/moderno.jpg" alt="Vista de la vista moderna">
        </figure>
        <div class="config__botonera">
            <input class="confirmacion__boton" type="submit" value="Guardar Cambios">
            <input class="confirmacion__boton" type="reset" value="Cancelar">
        </div>';
    include '../html/footerInt.html';
}
?>