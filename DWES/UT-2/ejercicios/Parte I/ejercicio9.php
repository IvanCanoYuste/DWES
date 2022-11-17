<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 9</title>
</head>

<body>
  <?php

$numero1 = 11;
$numero2 = 10;
$numero3 = 11;
$numeroMayor;
$contador = 0;

if ($numero1 >= $numero2 and $numero1 >= $numero3) {
  $numeroMayor = $numero1;
}
else if ($numero2 >= $numero3) {
  $numeroMayor = $numero2;
}
else {
  $numeroMayor = $numero3;
}
if ($numeroMayor == $numero1) {
  $contador++;
}
if ($numeroMayor == $numero2) {
  $contador++;
}
if ($numeroMayor == $numero3) {
  $contador++;
}
if ($contador == 1) {  echo "El número mayor es $numeroMayor y está $contador vez";
}
else {
  echo "El número mayor es $numeroMayor y está $contador veces";
}
?>
</body>

</html>