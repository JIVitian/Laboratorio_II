<!--Laboratorio II - Trabajo practico N°6
    En este TP voy a aprender a manejar bases de datos en PHP y
    tratar de mejorar algunas practicas y empezar a usar otras.
-->

<!DOCTYPE html>
<html lang="es">

<!--HEAD-->
<head>
  <!--METATAGS-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Jorge Iván, Vitian">
  <meta name="description" content="Login de usuarios para página de peliculas">

  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <!--FAVICON-->
  <link rel="shortcut icon" href="favicon.ico" type="../img/icono.png">

  <!--TITULO-->
  <title>Lab II</title>

</head>

<!--BODY-->
<body class="login__body">
  <header class="login__header">
    <nav class="login__nav">

    </nav>
  </header>

  <main class="login__main">
    <section class="login__section">
      <article class="login__article">
        <form class="login__form" action="../php/procesar.php" method="post" enctype="multipart/form-data">
          <label class="login__label" for="user">Usuario:</label>
            <input class="login__input" type="text" maxlength="60" placeholder="Nombre de Usuario" id="user" name="usuario" required>
          <label class="login__label" for="pass">Contraseña:</label>
            <input class="login__input" type="password" maxlength="40" placeholder="Contraseña" id="pass" name="password" required>
          <label class="login__label" for="mail">Mail:</label>
            <input class="login__input" type="email" maxlength="80" placeholder="usuario123@gmail.com" id="mail" name="mail" required>
          <label class="login__label" for="type">Tipo de Usuario:</label>
          <select class="login__select" name="tipo" id="type">
            <option value="usuario" selected>Usuario</option>
            <option value="administrador">Administrador</option>
          </select>
          <label class="login__label" for="foto">Foto:</label>
            <input class="login__input" type="file" accept="image/*" id="foto" name="foto">
          <input class="login__boton" type="submit" value="Registrarse">
          <input class="login__boton" type="reset" value="Limpiar">
        </form>
      </article>
    </section>
  </main>

  <footer class="login__footer">
    
  </footer>
</body>
</html>