<?php
function showFile($fName){ //Funcion para guardar el contenido de un archivo txt en una matríz que guarda arreglos csv
    $ubicacion = 'txt/';
    $file = fopen($ubicacion . $fName, 'r'); //abre el archivo solo para lectura
    $separate = [];
    $i = 0;
    while (!feof($file)){
        $line = fgets($file); //Obtiene una linea del archivo
        if ($line != ''){ //Controla que no esta vacio
            $separate[$i] = explode(';', $line); //Guardo los arreglos en una matriz para usarlos en el main
            $i += 1;
        }
    }
    
    fclose($file); //Cierro el archivo para evitar errores
    return $separate;
} 
?>