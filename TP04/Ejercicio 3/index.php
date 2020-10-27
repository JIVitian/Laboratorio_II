<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <meta name="author" content="Jorge Iván Vitian">
    <link rel="stylesheet" type="" href="css/style.css">
    <title>Ejercicio 3 </title>
</head>
<body style="text-align: center">
    <main>
        <header>
            <h1>Invertir un Número</h1>
        </header>
        <section>
            <article>
                <?php
                include("funcion.php");

                $numero = mt_rand(100, 1000000);

                echo '<p>Número: ', $numero, '</p>';
                echo '<p>Número invertido: ', invertirNumero($numero), '</p>';
                ?>
            </article>
        </section>
    </main>
</body>
</html>