<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 8</title>
</head>

<body>

    <?php
$colillas = 19;
$cigarros = 0;

while ($colillas >= 7) {

    $colillas -= 7;
    $colillas++;
    $cigarros++;
}
echo "Se puede hacer $cigarros cigarros y le sobran $colillas colillas";
?>
</body>

</html>