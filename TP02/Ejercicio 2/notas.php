<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Iván Vitian">
    <title>Punto 2</title>
    <?php
    $nota1 = mt_rand(1, 10);
    $nota2 = mt_rand(1, 10);
    //Supongo que los profes son copados (?)
    $final = ceil(($nota1 + $nota2) / 2);
    ?>
</head>

<body>
    <main>
        <section>
            <article>
                <!--Tabla Solo para ilustrar-->
                <table>
                    <caption>Condiciones Para Aprobar</caption>
                    <thead>
                        <tr>
                            <th>Nota</th>
                            <th>Condición</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1-2-3</td>
                            <td>Desaprobado</td>
                        </tr>
                        <tr>
                            <td>4-5-6</td>
                            <td>Regulariza</td>
                        </tr>
                        <tr>
                            <td>7-8-9-10</td>
                            <td>Promociona</td>
                        </tr>
                    </tbody>
                </table>
            </article>
            <article>
                <?php
                    echo '<p>Nota primer parcial: ' . $nota1 . '</p>';
                    echo '<p>Nota segundo parcial: ' . $nota2 . '</p>';
                    echo '<p>Nota Final: ' . $final . '</p>';
                    echo '<br>';
                    echo '<p>Condición del alumno: ';
                    if ($final <= 3) {
                        echo 'DESAPRUEBA</p>';
                    } elseif ($final <= 6) {
                        echo 'REGULARIZA</p>';
                    } else {
                        echo 'PROMOCIONA</p>';
                    }
                ?>
            </article>
        </section>
    </main>
</body>

</html>