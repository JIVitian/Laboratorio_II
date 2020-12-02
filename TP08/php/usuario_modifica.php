<?php
session_start();
include ('conexion.php');
$conexion = conectar ('peliculas');

if(!empty($_SESSION['usuario'])) {
  include ('headerInt.php');

  if ($conexion && !empty($_GET['id'])){
      include ('menu.php');
      echo '</article><article class="php__article">';

      $query = mysqli_query($conexion, 'SELECT * FROM usuarios WHERE id = ' . $_GET['id']);
      $fila = mysqli_fetch_array($query);

      echo '<form class="signup__form" action="../php/usuario_modifica_ok.php" method="post" enctype="multipart/form-data">
            <legend class="signup__titulo"><h2>Registrese</h2></legend>
            <label class="signup__label" for="user">Usuario:</label>
              <input class="signup__input" type="text" value="' . $fila['usuario'] . '" maxlength="60" placeholder="Nombre de Usuario" id="user" name="usuario">
            <label class="signup__label" for="pass">Contraseña:</label>
              <input class="signup__input" type="password" maxlength="40" placeholder="Contraseña" id="pass" name="password">
            <label class="signup__label" for="mail">Mail:</label>
              <input class="signup__input" type="email" value ="' . $fila['mail'] . '" maxlength="80" placeholder="usuario123@gmail.com" id="mail" name="mail">
            <label class="signup__label" for="type">Tipo de Usuario:</label>
            <select class="signup__select" name="tipo" id="type">';
          if ($fila['tipo'] == 'usuario') {
              echo '<option value="usuario" selected>Usuario</option>
              <option value="administrador">Administrador</option>';
          } else {
              echo '<option value="usuario">Usuario</option>
              <option value="administrador" selected>Administrador</option>';
          }
      echo '</select>
          <label class="signup__label" for="foto">Foto:</label>
            <input class="signup__input" type="file" accept="image/*" id="foto" name="foto">
            <input type="hidden" value="' . $_GET['id'] . '" name="id">
          <input class="signup__boton" type="submit" value="Actualizar">
        </form>
        <section class="php__section">
          <a href="listado_usuarios.php"><button class="signup__boton">Cancelar</button></a>
        </section>';
  } else {
      echo '<p>El usuario elegido no se encuentra en la base de datos.</p>';
      header('refresh:3;url=listado_usuarios.php');
  }
  include ('../html/footerInt.html');
} else {
    echo '<h1>No inició sesión para ingresar a este sitio.</h1>';
    header('refresh:3 ; url=../index.html');
}
?>