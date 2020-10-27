<?php
if (!empty($_POST['titulo']) && 
    !empty($_POST['genero']) &&
    !empty($_POST['fechaEstreno']) &&
    isset($_FILES)){

    $_POST['titulo'] = trim($_POST['titulo']);

    if (empty($_POST['destacado'])) {
        $_POST['destacado'] = 'No';
    }

    var_dump($_POST);

    var_dump($_FILES);

    $imgName = $_FILES['imagen']['name'];
    
    #Vuelco los datos del post y el nombre de la imagen en un array
    $datos = implode(';', $_POST) . ';' . $imgName . PHP_EOL;

    #Busco el origen de la imagen
    $origen = $_FILES['imagen']['tmp_name'];

    #Defino a donde ira a parar la imagen
    $destino = '../img/caratulas';
    if (!file_exists($destino)){
        mkdir($destino);
    }

    #Muevo la imagen a la carpeta de caratulas
    $envio = move_uploaded_file($origen, $destino . '/' . $imgName);

    $file = fopen('../txt/peliculas.txt', 'a');

    #Guardo los datos del Formulario en un archivo en donde cada dato se separa por ;
    fputs($file, $datos); 
    
    #Cierro el archivo y vuelvo a la página principal
    fclose($file);
    header('refresh:0 ; url=../index.html');
} else{
    echo '<h1>Datos Incorrectos</h1> <p>Se lo devolverá a la pagina principal.</p>';
    header('refresh:3 ; url=../index.html');
}
?>