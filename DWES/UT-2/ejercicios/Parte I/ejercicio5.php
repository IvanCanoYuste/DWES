<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php
$numero = 3;
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($numero != $i) {
        $suma += $i;
    }
    else
        $numero += 10;
}
echo $suma;

?>
</body>

</html>