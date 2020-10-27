<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <?php
    //Declaración de variables
    $totalLecturas1 = mt_rand(3000, 7000);
    $totalLecturas2 = mt_rand(3000, 7000);
    $lecturaSensor1 = array();
    $lecturaSensor2 = array();
    $promedioSensor1 = 0;
    $promedioSensor2 = 0;
    ?>
</head>

<body>
    <header>
        <h1>Registro De Sensores del DataCenter</h1>
    </header>
    <main>
        <section>
            <article>
                <h2>Temperatura (en grados centigrados) del DataCenter</h2>
                <hr>
                <?php
                //Agrego todos los valores de ambos arreglos.
                for ($i = 0 ; $i < $totalLecturas1 ; $i++) {
                    $lecturaSensor1[$i] = mt_rand(15, 40);
                }

                for ($i = 0 ; $i < $totalLecturas2 ; $i++) {
                    $lecturaSensor2[$i] = mt_rand(15, 40);
                }

                //Calculo los promedios mediante los metodos aprendidos en clase.
                $promedioSensor1 = array_sum($lecturaSensor1)/count($lecturaSensor1);
                $promedioSensor2 = array_sum($lecturaSensor2)/count($lecturaSensor2);

                echo '<p>Promedio de Temperatura del Sensor 1: <b>' . number_format($promedioSensor1, 2, ".", ",") . '</b></p>';
                echo '<p>Promedio de Temperatura del Sensor 2: <b>' . number_format($promedioSensor2, 2, ".", ",") . '</b></p>';
                
                echo '<hr>';
                //Bajo mi criterio no hace falta crear una variable para guardar el promedio de los promedios, asi que los calculo
                //en la misma linea en que los muestro.
                echo '<h2>Promedio de temperatura en el DataCenter: ' . number_format(($promedioSensor1 + $promedioSensor2)/2, 2, ".", ",") . '</h2>';
                ?>
            </article>
        </section>
    </main>
</body>

</html>