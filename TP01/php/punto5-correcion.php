<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Punto 5: Correcciones</title>
</head>

<body>
    <!--Le agregue un main, section y un article para que no este solo en el body-->
    <main>
        <section>
            <article>
                <?php
                //Las constantes no estaban entre comillas simples
                define('DOLAR', 78.13);
                define('IMPUESTO', 30);
                echo '----- CAMBIO DE MONEDAS -----';
                echo '<br>';
                echo '<br>';
                echo 'Pesos a cambiar : $';
                $valorPesos = mt_rand(500, 50000);
                echo $valorPesos; //Faltaba un ; en esta linea
                echo '<br>';
                echo '<br>';
                echo 'Dolar BANCO NACION : U$S ';
                $valorDolarNacion = $valorPesos / DOLAR;
                echo number_format($valorDolarNacion, 2, ',', '.'); //Faltaba un ; en esta linea y hay muchos
                echo '<br>';
                echo 'Dolar TURISTA: U$S ';
                $valorTurista = ($valorPesos * (1 - (IMPUESTO / 100))) / DOLAR;
                $valorTurista = $valorTurista; //Declaración redundante
                echo number_format($valorTurista, 2, ',', '.'); //La variable estaba mal escrita
                echo '<br>';
                ?>
            </article>
        </section>
    </main>
    <!--No se si considerarlo como error, pero en los echo no hay etiquetas <p> o alguna otra-->
</body>

</html>