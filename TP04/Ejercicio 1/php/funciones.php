<?php
//Declaro la función
function aplicarDescuento($monto, $descuento) {
    //Si el valor del descuento no esta pasado a porcentaje,
    //Se lo pasará en éste if 
    if($descuento >= 1) {
            $descuento = $descuento/100;
    }
    
    return $monto*(1 - $descuento);
}
?>