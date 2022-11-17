<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 6</title>
</head>

<body>
    <?php

$cantidadDinero = 12;
$cantidadInicial = $cantidadDinero;
$cantidad100 = 0;
$cantidad50 = 0;
$cantidad20 = 0;
$cantidad10 = 0;
$cantidad5 = 0;
$texto = "";

if ($cantidadDinero < 0) {
    echo "Es un valor negativo";
}
else
    $texto = "$cantidadInicial € se componen por --> ";
if ($cantidadDinero / 100 > 1) {
    $cantidad100 = intval($cantidadDinero / 100);
    $cantidadDinero = $cantidadDinero - ($cantidad100 * 100);
    $texto .= "$cantidad100 de billetes de 100, ";
}
if ($cantidadDinero / 50 > 1) {
    $cantidad50 = intval($cantidadDinero / 50);
    $cantidadDinero = $cantidadDinero - ($cantidad50 * 50);
    $texto .= "$cantidad50 de billetes de 50, ";
}

if ($cantidadDinero / 20 > 1) {
    $cantidad20 = intval($cantidadDinero / 20);
    $cantidadDinero = $cantidadDinero - ($cantidad20 * 20);
    $texto .= "$cantidad20 de billetes de 20, ";
}
if ($cantidadDinero / 10 > 1) {
    $cantidad10 = intval($cantidadDinero / 10);
    $cantidadDinero = $cantidadDinero - ($cantidad10 * 10);
    $texto .= "$cantidad10 de billetes de 10, ";
}
if ($cantidadDinero / 5 > 1) {
    $cantidad5 = intval($cantidadDinero / 5);
    $cantidadDinero = $cantidadDinero - ($cantidad5 * 5);
    $texto .= "$cantidad5 de billetes de 5, ";
}
if ($cantidadDinero > 0) {
    $texto .= "y sobran $cantidadDinero €";
}

echo $texto;


?>
</body>

</html>