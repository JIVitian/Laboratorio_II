<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Punto 4: recibo de Sueldo</title>
    <?php
    //Iniciación de las variables a usar en el problema
    //Voy a guardar todos los valores a mostrar en sus respectivas variables
    $nombre = "Jorge Iván Vitian";
    const APORTE_JUBILATORIO = 13;
    const OBRA_SOCIAL = 3.5;
    $sueldoBruto = rand(20000 * 10, 50000 * 10) / 10;
    //Calculo los porcentajes de la siguiente manera
    $montoAporte = $sueldoBruto * 13 / 100;
    $montoObra = $sueldoBruto * 3.5 / 100;
    $sueldoNeto = $sueldoBruto - $montoAporte - $montoObra;
    ?>
</head>

<body>
    <main>
        <section>
            <article>
                <h1>RECIBO DE SUELDO</h1>
                <?php
                echo '<h2>Empleado/a: ' . $nombre . '.<br></h2>';
                echo '<br><hr>';
                echo '<p>Sueldo Bruto: $' . $sueldoBruto . '<br></p>';
                echo '<p>Aporte Jubilatorio: $' . number_format($montoAporte, 1, ',', '.') . '<br></p>';
                echo '<p>Obra Social: $' . number_format($montoObra, 1, ',', '.') . '<br></p>';
                echo '<br><hr>';
                echo '<p>Sueldo Neto: $' . number_format($sueldoNeto, 1, ',', '.') . '<br></p>';
                ?>
            </article>
        </section>
    </main>
</body>

</html>