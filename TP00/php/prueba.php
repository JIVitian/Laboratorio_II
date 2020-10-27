<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <main>
        <section>
            <article>
                <?php
                $coso = mt_rand(1, 3);
                echo $coso !== 1 || $coso == 2 ? '<p>pato</p>' : '<p>ganzo</p>';
                ?>
            </article>
        </section>
    </main>
</body>
</html>