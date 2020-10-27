<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <?php
    $recaudacion = 0;
    $vehiculos = mt_rand(2000, 3000);
    $tipoVehiculo = 0;
    $tarifa = ['motos' => 35, 'autos' => 60, 'camionetas' => 85, 'pesados' => 120];
    $cantidadVehiculos = ['motos' => 0, 'autos' => 0, 'camionetas' => 0, 'pesados' => 0];
    ?>
</head>

<body>
    <header>
        <h1>Informe de Recaudación de Peaje</h1>
    </header>
    <main>
        <section>
            <article>
                <hr>
                <?php
                for ($i = 1; $i <= $vehiculos; $i++) {
                    //Para la simplicidad del problema, voy a suponer que la probabilidad de que pase
                    //cualquier auto varia como indiqué en el switch.
                    $tipoVehiculo = mt_rand(1, 10);

                    //Cada número representa a un tipo de vehiculo
                    //Cada auto tiene su propia tarifa dada en el enunciado
                    switch ($tipoVehiculo) {
                        case 1:
                        case 2:
                            $cantidadVehiculos['motos']++;
                            break;

                        case 3:
                        case 4:
                        case 5:
                            $cantidadVehiculos['autos']++;
                            break;

                        case 6:
                        case 7:
                            $cantidadVehiculos['camionetas']++;
                            break;

                        case 8:
                        case 9:
                        case 10:
                            $cantidadVehiculos['pesados']++;
                            break;
                            //Creo que no hace falta poner un caso default, puesto a
                            //que no le doy la oportunidad al script para salir del rango que le asigne
                    }
                }

                //Muestro los resultados
                foreach ($cantidadVehiculos as $tipo => $cantidad) {
                    echo '<p>Cantidad de ' . $tipo . ': ' . $cantidad . ' y recaudó: $' . ($tarifa[$tipo]*$cantidad) . '</p>';
                    $recaudacion = $recaudacion + $tarifa[$tipo]*$cantidad; //Calculo la recaudación en cada iteración
                }

                echo '<hr>';

                echo '<h2>Total de Vehículos: ' . $vehiculos . '</h2>';

                echo '<h2>Total Recaudado: $' . $recaudacion . '</h2>';
                ?>
            </article>
        </section>
    </main>
</body>

</html>