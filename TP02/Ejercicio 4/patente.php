<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Iván Vitian">
    <title>Punto 4</title>
    <?php
        const AE = 'AE';
        //Declaro cada digito como variable para que se
        //Siempre haya la misma cantidad de digitos en pantalla.
        $numero1 = mt_rand(0, 9);
        $numero2 = mt_rand(0, 9);
        $numero3 = mt_rand(0, 9);
        $letra1 = chr(mt_rand(65, 90));
        $letra2 = chr(mt_rand(65, 90));
    ?>
</head>
<body>
    <header><h1>Registro Automotor de la Provincia de Tucumán</h1></header>
    <main>
        <section>
            <article>
                <h2>Patente generada:</h2>
                <?php
                    echo '<p>' . AE . ' ' . $numero1 . $numero2 . $numero3 . ' ' . $letra1 . $letra2 . '<?p>';
                ?>
            </article>
      </section>
    </main>
</body>
</html>