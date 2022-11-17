<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 13</title>
</head>

<body>
    <?php
$numero = 322;

$numIni;
$numFin;

$numIni = intval($numero / 100);
$numFin = $numero % 10;

if ($numIni == $numFin) {
    echo "El numero $numero es capicua";
}
else
    echo "El numero $numero no es capicua";
?>
</body>

</html>