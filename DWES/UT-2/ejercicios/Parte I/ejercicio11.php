<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 11</title>
</head>

<body>
    <?php
$numero = 5;
$factorial = 1;

if ($numero == 1) {
    $factorial = 1;
}
else {
    for ($i = 1; $i <= $numero; $i++) {
        $factorial = $factorial * $i;
    }
}
echo "El factorial de $numero es: $factorial";
?>
</body>

</html>