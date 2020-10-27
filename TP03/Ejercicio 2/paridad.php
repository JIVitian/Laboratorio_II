<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <?php
    //Variables
    $numero = 0;
    $pares = 0;
    $impares = 0;
    ?>
</head>
<body>
    <main>
        <section>
            <article>
                <?php
                for($i = 1 ; $i <= 10 ; $i++){
                    //Cada vez que se realiza una iteracion se cambia el numero
                    $numero = mt_rand(1, 500);
                    echo '<p>' . $numero . '</p>';

                    if($numero % 2 == 0){
                        $pares++;
                    }else{
                        $impares++;
                    }
                }
                echo '<p>Cantidad pares: ' . $pares . '</p>';
                echo '<p>Cantidad impares: ' . $impares . '</p>';
                ?>
            </article>
        </section>
    </main>
</body>
</html>