<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <?php
    //Variables
    $numero = mt_rand(100, 100000);
    $digitos = 0;
    $pares = 0;
    $impares = 0;
    ?>
</head>

<body>
    <main>
        <section>
            <article>
                <?php
                echo '<p>Número : ' . $numero . '</p>';

                while ($numero >= 1) {
                    //Cada vez que se realiza una iteración, se cuenta un dígito mas
                    $digitos++;
                    //Compruebo la paridad del resto del numero y 10, que sería el ultimo digito
                    if (($numero % 10) % 2 == 0) {
                        $pares++;
                    } else {
                        $impares++;
                    }
                    //El número disminuye en un dígito con cada división
                    $numero = intdiv($numero, 10);
                }

                echo '<p>Cantidad de dígitos: ' . $digitos . '</p>';
                echo '<p>Cantidad pares: ' . $pares . '</p>';
                echo '<p>Cantidad impares: ' . $impares . '</p>';
                ?>
            </article>
        </section>
    </main>
</body>

</html>