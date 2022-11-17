<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 10</title>
</head>

<body>
    <?php

$lado1 = 11;
$lado2 = 9;
$lado3 = 10;

if ($lado1 == $lado2 and $lado2 == $lado3) {
    echo "El triangulo es equilatero";
}else if($lado1 == $lado2 or $lado2 == $lado3 or $lado1 == $lado3){
    echo "El triangulo es isosceles";
}else echo "El triangulo es escaleno"

?>
</body>

</html>