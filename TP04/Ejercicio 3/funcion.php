<?php
function invertirNumero($numero) {
    //Inicializo una variable en donde guardar el resultado
    $invertido = '';
    //Paso el número a string para fines practicos
    $numero = (string) $numero;

    #Recorro el string desde el ultimo caracter hasta el primero
    for($i = strlen($numero) - 1; $i >= 0; $i--) {
        #Voy concatenando el ultimo numero en la variable a devolver
        $invertido .= $numero[$i];
    }

    #Hago un cast para que el la función devuelva un numero
    return (int) $invertido;
}
?>