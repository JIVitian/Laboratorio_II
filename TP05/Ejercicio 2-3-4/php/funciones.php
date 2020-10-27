<?php
function leerTxt($ubicacion, $fileName){
    if (file_exists($ubicacion.$fileName)){
        $i = 0;
        $file = fopen($ubicacion . $fileName, 'r');

        while (!feof($file) && !empty($file)){
            //Lee una linea del archivo, le pongo trim por las dudas
            $line = trim(fgets($file));
            if (strlen($line) != 0 && $line != '\n' && $line != PHP_EOL){ //Reviso que no haya nada vacio en la linea
                $files[$i] = explode(';', $line); //Guardo los datos del archivo en una matriz
                $i += 1;
            }
        }

        //Cierro el archivo para evitar errores
        fclose($file);
    
        #Retorno la matriz con la información del archivo
        return $files;
    }
}

function guardarTxt($ubicacion, $fileName, $contenido){
    if(!file_exists($ubicacion)){
        mkdir($ubicacion);
    }

    $file = fopen($ubicacion . $fileName, 'a');

    #Guardo los datos del formulario en un archivo txt
    fputs($file, $contenido);

    #Cierro el archivo
    fclose($file);
}

function esUsuario($usuario, $password) {
    $usuarios = leerTxt('../txt/', 'usuarios.txt');

    for ($i = 0 ; $i < sizeof($usuarios) ; $i++){
        if ($usuario == $usuarios[$i][0] &&
            $password == $usuarios[$i][1]){
            return true;
       }
    }

    return false;
}
?>