<?php
$minDias = 365;
$totalDias = 0;
$mensaje = "";
$estaciones = array(
    "Primavera" => 65,
    "Verano" => 20,
    "Otoño" => 60,
    "Invierno" => 57,
);




foreach ($estaciones as $estacion => $dias) {
    if ($dias < $minDias) {
        $minDias = $dias;
        $mensaje = "La estacion con menos dias lectivos es $estacion con $dias dias<br>";
    }
    $totalDias += $dias;
}
echo $mensaje;
echo "El total de horas lectivas son $totalDias";



?>