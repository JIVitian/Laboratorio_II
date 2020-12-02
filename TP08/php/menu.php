<?php
echo '
  <section class="session">
    <figure class="session__figure">
      <img class="session__image" src="../img/fotos_perfil/' . $_SESSION['foto'] . '" alt="foto de perfil del usuario">
    </figure>
    <p class="session__name">' . $_SESSION['usuario'] . '  |</p>
    <a class="session__close" href="cerrar_sesion.php">cerrar sesión</a>
  </section>
  <nav class="menu">
    <h2 class="menu__h2">Usuarios</h2>
    <ul class="menu__ul">
      <li class="menu__li"><a class="menu__boton" href="alta_usuario.php">Nuevo usuario</a></li>
      <li class="menu__li"><a class="menu__boton" href="listado_usuarios.php">Listado usuarios</a></li>
    </ul>
    <h2 class="menu__h2">Opciones</h2>
    <ul class="menu__config">
      <li class="menu__li"><a class="menu__boton" href="configuracion.php">Configuración</a></li>
    </ul>
  </nav>';
?>