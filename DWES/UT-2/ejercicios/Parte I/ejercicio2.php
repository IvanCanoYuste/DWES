<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

const numero = 10;
$texto = "";
for ($i = 0; $i < numero; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        $texto .= "*";
    }
    $texto .= "<br>";
}
echo $texto;


?>
</body>

</html>