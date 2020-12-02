<?php
session_start();

if(!empty($_SESSION['usuario'])) {
  include ('headerInt.php');
  include ('menu.php');
  echo '</article><article class="php__article">
        <form class="signup__form" action="../php/procesar.php" method="post" enctype="multipart/form-data">
          <legend class="signup__titulo"><h2>Registrese</h2></legend>
          <label class="signup__label" for="user">Usuario:</label>
            <input class="signup__input" type="text" maxlength="60" placeholder="Nombre de Usuario" id="user" name="usuario" required>
          <label class="signup__label" for="pass">Contraseña:</label>
            <input class="signup__input" type="password" maxlength="40" placeholder="Contraseña" id="pass" name="password" required>
          <label class="signup__label" for="mail">Mail:</label>
            <input class="signup__input" type="email" maxlength="80" placeholder="usuario123@gmail.com" id="mail" name="mail" required>
          <label class="signup__label" for="type">Tipo de Usuario:</label>
          <select class="signup__select" name="tipo" id="type">
            <option value="usuario" selected>Usuario</option>
            <option value="administrador">Administrador</option>
          </select>
          <label class="signup__label" for="foto">Foto:</label>
            <input class="signup__input" type="file"6+ accept="image/*" id="foto" name="foto">
          <input class="signup__boton" type="submit" value="Registrarse">
          <input class="signup__boton" type="reset" value="Limpiar">
        </form>';

  include ('../html/footerInt.html');
} else {
  echo '<h1>No inició sesión para ingresar a este sitio.</h1>';
  header('refresh:3 ; url=../index.html');
}
?>