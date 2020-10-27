<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body style="text-align: center">
    <header>
        <h1>Bienvenido</h1>
    </header>
    <main>
        <section>
            <article>
                <?php
                if(!empty($_POST['usuario']) && !empty($_POST['password'])) {
                    echo '<p><b>Usuario:</b> ', ($_POST['usuario']), '<p>';
                    echo '<p><b>Contraseña:</b> ', ($_POST['password']), '<p>';
                }
                ?>
            </article>
        </section>
    </main>
</body>
</html>