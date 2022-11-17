<?php

$matriz = array(array(1, 0, 0, 0), array(0, 1, 0, 0), array(0, 0, 1, 0), array(0, 0, 0, 1));
$contMedio = 0;
$contLados = 0;

for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        if ($i == $j and $matriz[$i][$j] == 1) {
            $contMedio++;
        }
        if ($i != $j and $matriz[$i][$j] == 0) {
            $contLados++;
        }
    }
}

if ($contMedio == count($matriz) and $contLados == (count($matriz) * count($matriz[0])) - count($matriz)) {
    echo "La matriz si que es identidad";
}
else
    echo "La matriz no es identidad";

?>