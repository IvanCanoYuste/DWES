<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

$piedra = "Piedra";
$papel = "Papel";
$tijeras = "Tijeras";

$jugador1 = $papel;
$jugador2 = $tijeras;
echo "El jugador 1 saca $jugador1<br>";
echo "El jugador 2 saca $jugador2<br>";

if (($jugador1 == "Piedra" or $jugador2 == "Piedra") and ($jugador1 == "Tijeras" or $jugador2 == "Tijeras")) {
    echo "$piedra gana";
}
if (($jugador1 == "Papel" or $jugador2 == "Papel") and ($jugador1 == "Piedra" or $jugador2 == "Piedra")) {
    echo "$papel gana";
}
if (($jugador1 == "Tijeras" or $jugador2 == "Tijeras") and ($jugador1 == "Papel" or $jugador2 == "Papel")) {
    echo "$tijeras gana";
}


?>
</body>

</html>