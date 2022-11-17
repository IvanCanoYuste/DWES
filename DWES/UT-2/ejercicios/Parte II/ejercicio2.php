<?php

$modulos = array(
    "DWES" => "9 horas",
    "DWEC" => "8 horas",
    "Interfaces" => "5 horas",
    "Despligue" => "4 horas",
    "Empresa" => "3 horas",
);

foreach ($modulos as $asig => $horas) {
    echo "Del modulo $asig tenemos $horas<br>";
}

?>