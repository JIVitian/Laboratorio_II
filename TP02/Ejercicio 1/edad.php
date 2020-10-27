<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1</title>
    <?php
        //Declaración de variables.
        $nombre = 'Iván';
        $edad = mt_rand(1, 80);
    ?>
</head>

<body>
    <header>
        <?php
            echo '<h1>¡Hola ' . $nombre . '!</h1>';
            if($edad >= 18){
                echo '<h2>Tienes ' . $edad . ' años, eres mayor de edad.</h2>';
            }else{
                echo '<h2>Tienes ' . $edad . ' años, eres menor de edad.</h2>';
            }
        ?>
    </header>

    <main>
        <section>
            <article>
            
            </article>
        </section>
    </main>
</body>

</html>