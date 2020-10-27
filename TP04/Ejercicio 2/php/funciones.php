<?php
function volumen($radio, $altura){
    #const PI = 3.14157; No funciona por alguna razón
    define('PI', pi());
    return PI*($radio**2)*$altura;
}
?>