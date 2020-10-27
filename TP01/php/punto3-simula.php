<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Punto 3: Simulación</title>
    <?php
    $precio1 =  rand(1 * 10, 10000 * 10) / 10;
    $precio2 =  rand(1 * 10, 10000 * 10) / 10;
    $precio3 =  rand(1 * 10, 10000 * 10) / 10;
    //El IVA descuenta el 21% del valor del producto, lo que
    //equivale a tomar el 121% del valor del mismo.
    //La misma lógica se aplica para el descuento.
    const IVA = 1.21;
    const DESCUENTO = 0.85;
    $total = ($precio1 + $precio2 + $precio3);
    ?>

</head>

<body>
    <main>
        <section>
            <article>
                <h1>---------SIMULACIÓN DE COMPRAS---------</h1>
                <!--No hace falta que muestre el valor real de las variables,
            basta con que el usuario lo entienda-->
                <p>Valor de IVA: 21%</p>
                <p>Valor de DESCUENTO: 15%</p>
                <br>
                <?php
                echo '<p>Valor del primer producto si IVA: $' . $precio1 . '<br></p>';
                echo '<p>Valor del segundo producto sin IVA: $' . $precio2 . '<br></p>';
                echo '<p>Valor del tercer producto sin IVA: $' . $precio3 . '<br></p>';
                echo '<p><br>Total sin IVA: $' . $total . '<br></p>';
                echo '<p>Total aplicando IVA: $' . number_format($total * IVA, 1, ',', '.') . '<br></p>';
                echo '<p><br>Total aplicando Descuento del 15%: $' . number_format($total * IVA * DESCUENTO, 1, ',', '.') . '<br></p>';
                ?>
            </article>
        </section>
    </main>
</body>

</html>