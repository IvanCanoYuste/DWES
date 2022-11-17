<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 1</title>
</head>

<body>
  <?php

$numero1 = 10;
$numero2 = 10;
$numero3 = 11;
$numeroMayor;

if ($numero1 >= $numero2 and $numero1 >= $numero3) {
  $numeroMayor = $numero1;
}
else if ($numero2 >= $numero3) {
  $numeroMayor = $numero2;
}
else
  $numeroMayor = $numero3;
echo $numeroMayor;

?>
</body>

</html>