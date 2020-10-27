<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Volumen de un Cilindro</title>
    <?php
    //Constante pi
    const CPI = 3.14157927;
    //Voy a trabajar con numeros reales pues se aproxima mas a la realidad, comenzare desde el 0
    $altura = rand(0 * 100, 100 * 100) / 100;
    $radio = rand(0 * 100, 40 * 100) / 100;
    //Inicializo el volumen con una operacion
    $volumen = ($altura * ($radio ** 2) * CPI) / 3;
    ?>

</head>

<body>
    <main>
        <section>
            <article>
                <h1>Volumen del Cono</h1>
                <!--No se como cargar la imagen, no aparece de esta manera-->
                <img src="../img/cono.jpg" alt="Grafica de un cono">
                <?php
                echo '<p>Altura del cono: ' . $altura . 'Cm <br></p>';
                echo '<p>Radio del cono: ' . $radio . 'Cm2 <br></p>';
                //Muestro el volumen solo con dos cifras significativas despues de la coma
                echo '<p>Volumen del cono: ' . number_format($volumen, 2, '.', ',') . 'Cm3<br></p>';
                ?>
            </article>
        </section>
    </main>
</body>

</html>