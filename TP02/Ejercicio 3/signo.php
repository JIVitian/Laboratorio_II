<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Iván Vitian.">
    <title>Punto 3</title>
    <?php
        //Declaración de variables.
        $dia = mt_rand(1, 31);
        $mes = mt_rand(1, 12);
        $anio = mt_rand(1950, 2010);
    ?>
</head>
<body>
    <header><h1>Signos Zodiacales</h1></header>
    
    <main>
        <section>
            <article>
                <?php
                    echo '<p>Fecha de Nacimiento: ' . $dia . '/' . $mes . '/' . $anio . '</p>';
                    echo '<p>Tu signo es ';
                    /* 
                    if(($mes == 12 && $dia < 20) || ($mes == 12 && $dia >= 22)){
                        echo 'Capricornio.</p>';
                    }elseif(($mes == 2 && $dia < 20) || ($mes == 1 && $dia >= 21)){
                        echo 'Acuario.</p>';
                    }elseif(($mes == 2 && $dia > 20) || ($mes == 3 && $dia <= 19)){
                        echo 'Piscis.</p>';
                    }elseif(($mes == 3 && $dia >= 20) || ($mes == 4 && $dia <= 20)){
                        echo 'Aries.</p>';
                    }elseif(($mes == 4 && $dia > 20) || ($mes == 5 && $dia <= 20)){
                        echo 'Tauro.</p>';
                    }elseif(($mes == 5 && $dia > 20) || ($mes == 6 && $dia <= 21)){
                        echo 'Géminis.</p>';
                    }elseif(($mes == 6 && $dia > 21) || ($mes == 7 && $dia <= 22)){
                        echo 'Cáncer.</p>';
                    }elseif(($mes == 7 && $dia > 22) || ($mes == 8 && $dia <= 23)){
                        echo 'Leo.</p>';
                    }elseif(($mes == 8 && $dia > 23) || ($mes == 9 && $dia <= 23)){
                        echo 'Virgo.</p>';
                    }elseif(($mes == 9 && $dia > 23) || ($mes == 10 && $dia <= 22)){
                        echo 'Libra.</p>';
                    }elseif(($mes == 10 && $dia > 22) || ($mes == 11 && $dia <= 22)){
                        echo 'Escorpio.</p>';
                    }else{
                        echo 'Sagitario.</p>';
                    }
                    */

                    //Cambié el bloque anterior porque la profesora myriam dijo que había que hacerlo con switch

                    switch($mes){
                    case '1':
                        if($dia < 20) {
                            echo 'Capricornio. </p>';
                        }else{
                            echo 'Acuario. </p>.';
                        }
                    break;

                    case '2':
                        if ($dia < 20) {
                            echo 'Acuario. </p>';
                        }else{
                            echo 'Piscis. </p>';
                        }
                    break;

                    case '3':
                        if ($dia < 21) {
                            echo 'Piscis. </p>';
                        }else{
                            echo 'Aries. </p>';
                        }
                    break;

                    case '4':
                        if ($dia < 21){
                            echo 'Aries. </p>';
                        }else{
                            echo 'Géminis. </p>';
                        }
                    break;

                    case '5':
                        if ($dia < 21) {
                            echo 'Tauro. </p>';
                        }else{
                            echo 'Géminis. </p>';
                        }
                    break;

                    case '6':
                        if ($dia < 22) {
                            echo 'Géminis. </p>';
                        }else{
                            echo 'Cancer. </p>';
                        }
                    break;

                    case '7':
                        if ($dia < 23) {
                            echo 'Cancer. </p>';
                        }else{
                            echo 'Leo.</p>';
                        }
                    break;

                    case '8':
                        if ($dia < 24) {
                            echo 'Leo.</p>';
                        }else{
                            echo 'Virgo.</p>';
                        }
                    break;

                    case '9':
                        if ($dia < 24) {
                            echo 'Virgo.</p>';
                        }else{
                            echo 'Libra.</p>';
                        }
                    break;

                    case '10':
                        if ($dia < 23) {
                            echo 'Libra.</p>';
                        }else{
                            echo 'Escorpio.</p>';
                        }
                    break;

                    case '11':
                        if ($dia <23) {
                            echo 'Escorpio.</p>';
                        }else{
                            echo 'Sagitario.</p>';
                        }
                    break;

                    case '12':
                        if ($dia < 22) {
                            echo 'Sagitario.</p>';
                        }else{
                            echo 'Capricornio.</p>';
                        }
                    break;

                    default:
                        echo 'ERROR. <br> Alguno de los datos ingresados es incorrectos.';
                break;
                }
                ?>
            </article>
        </section>
    </main>
</body>
</html>