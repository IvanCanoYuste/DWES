<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
$numero = rand(0, 100);
if ($numero == 2 or $numero == 3 or $numero == 5) {
    echo "El $numero si es un numero primo";
}
else if ($numero % 2 == 0 or $numero % 3 == 0 or $numero % 5 == 0 or $numero % 7 == 0) {
    echo "El $numero no es un numero primo";
}
else
    echo "El $numero si es un numero primo";
?>
</body>

</html>