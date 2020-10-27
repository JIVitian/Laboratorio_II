<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php
                echo 'Este codigo está en el head';
                $apellido = 'Pérez'; //inicializo una variable tipo string
                $edad = mt_rand(mt_rand(1, 45), mt_rand(45, 99));
                const PI = 3.14159;
                $radio = 20;
                $area = PI * $radio **2;
                $area = number_format($area, 2, ',' , '.');
            ?>
        </title>
</head>
<body>
    <header>
        <?php echo '<h1>Esto está en el header, dentro del body' ; ?>
        <a href="php/prueba.php">prueba</a>
    </heaeder>
    
    <section>
        <article>
            <?php
                echo "<p>Apellido:  $apellido  </p>";
                print '<p>Edad: ' . $edad . '</p>';
                echo '<p>Su proyecto mas famoso se llama \'Cacatua\'</p>';
                echo $area . '<br>';
                print '<br>';
                echo gettype($apellido) . '<br>';
                echo '<br>' . settype($edad, "string") . $edad;
                $apellido .= ' Del Campo';
                echo '<br>' . $apellido;
                while($edad <= 99){
                    echo $edad++ . '<br>';
                }
            ?>
        </article>
    </section>
    
    <aside>
    
    </aside>

    <footer>
    
    </footer>
</body>