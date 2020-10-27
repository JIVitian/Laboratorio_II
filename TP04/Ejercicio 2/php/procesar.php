<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Volumen del Cilindro</title>
</head>
<body>
    <header>
        <h1>Volumen del Cilindro</h1>
    </header>
    <main>
        <section>
            <article>
                <div>
                    <?php
                    if(!empty($_POST['radio']) && !empty($_POST['altura']) 
                    && (0 < $_POST['radio'] && 0 < $_POST['altura'])){
                        include('funciones.php');
                        $radio = $_POST['radio'];
                        $altura = $_POST['altura'];

                        echo '<p>Radio: ', $radio, 'cm</p>';
                        echo '<p>Altura: ', $altura, 'cm</p>';
                        echo '<p>Volumen: ', round(volumen($radio, $altura), 2), 'cm3</p>';
                    }else { 
                        echo '<p>Datos incorrectos.</p>';
                    }
                    ?>
                </div>
            </article>
        </section>
    </main>
</body>
</html>