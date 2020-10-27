<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Iván Vitian">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Cumpleaños</title>
</head>

<body>
    <header>
        <h1>Buscar Cumpleañero</h1>
    </header>

    <main>
        <section>
            <article>
                <?php
                include('php/funciones.php');
                $archivo = showFile('archivo.txt');
                setlocale(LC_ALL,'spanish');

                //No hace falta hacer el control puesto que el archivo ya existe y lo dice el enunciado
                for ($i = 0 ; $i < 3 ; $i++){
                    if (date('m-d') == date_format(date_create($archivo[$i][3]), 'm-d')){ //Comparo el mes y el dia del archivo con el dia y mes actuales
                        echo '<img src="img/torta.png" style="width: 10vw;">'; //Si son iguales muestro la imagen antes de los h2
                    }

                    $fecha = strtotime($archivo[$i][3]); //De esta manera funciona lo de mostrar la fecha en español

                    echo '<h2>'. $archivo[$i][1] . ', ' . $archivo[$i][0] .'</h2>';
                    echo '<p>Mail: ' . $archivo[$i][2] . '</p>';
                    echo '<p>Fecha de Nacimiento: ' . strftime('%d de %B de %Y', $fecha) . '.</p>';

                    echo '<hr>';
                }
                ?>
            </article>
        </section>
    </main>

    <footer>
    
    </footer>
</body>
</html>