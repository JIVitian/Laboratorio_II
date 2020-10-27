<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento</title>
</head>

<body style="text-align: center">
    <header>
        <h1>Descuento realizado</h1>
    </header>
    <main>
        <section>
            <article>
                <?php
                //Perdon por el if feo, aquí hago los controles, si los formularios fueron
                //llenados y si su valor es correcto
                include('funciones.php');
                if(!empty($_POST['monto']) && !empty($_POST['descuento']) &&
                0 <= $_POST['monto'] &&
                (0 <= $_POST['descuento'] && $_POST['descuento'] <= 50)) {
                    #Le asigno valores a lo ingresado en el formulario
                    $monto = $_POST['monto'];
                    $descuento = $_POST['descuento'];

                    echo '<p>Monto: $', $monto, '</p>';
                    echo '<p>Descuento: ', $descuento, '%</p>';
                    echo '<p>Monto con descuento: $', aplicarDescuento($monto, $descuento), '</p>';
                }else {
                    //Función anonima solo para practicar
                    /*$montoNegativo = function($monto, $descuento) {
                        if ($monto == null && $descuento == null) {
                            return 0;
                        }else{
                            return abs($monto * (1 - $descuento/100));    
                        }
                    };*/
                    echo '<p>Los valores ingresados son incorrectos. </p>';
                    //echo '<p>El monto con los valores en negativo son: $', $montoNegativo($_POST['monto'], $_POST['descuento']), '</p>';
                }
                ?>
            </article>
        </section>
    </main>
</body>
</html>