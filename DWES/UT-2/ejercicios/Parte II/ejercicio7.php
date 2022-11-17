<pre>
<?php

/*
 Realizado por Iván Cano Yuste:
 */
//Creamos el array con los indices de los billetes que queremos y
//los igualamos a 0.
$cantidadDinero = 135; //Cantidad que queremos desglosar en billetes
$cantidad = array(
    100 => 0,
    50 => 0,
    20 => 0,
    10 => 0,
    5 => 0,

); //Array que luego completaremos

//Bucle que hace que se recorra todo el array.
foreach ($cantidad as $billetes => $cantidadBilletes) {
    $cantidad[$billetes] = intval($cantidadDinero / $billetes); //Sacamos el numero entero de billetes de cada tipo
    $cantidadDinero -= ($cantidad[$billetes] * $billetes); //Sacamos la diferencia 
}


print_r($cantidad); //Imprimimos el array.


?>
</pre>