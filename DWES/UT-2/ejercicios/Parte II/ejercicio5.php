<pre>
<?php

$matriz = array(
        array(2, 3, 5),
        array(1, 4, 7),
        array(0, 1, 6),
);
$esSimetrica = true;
$matrizFilas = [];
$matrizColumnas = [];


for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo "{$matriz[$i][$j]} ";
        if ($matriz[$i][$j] != $matriz[$j][$i]) {
            $esSimetrica = false;
        }
    }
    echo "<br>";
}



if ($esSimetrica == true) {
    echo "Es simetrica<br>";
}
else
    echo "No es simetrica<br>";

function suma($tipo, $matriz, $matrizNueva)
{
    for ($i = 0; $i < count($matriz); $i++) {
        $suma = 0;
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            switch ($tipo) {
                case "fila":
                    $suma += $matriz[$i][$j];
                    break;
                case "columna":
                    $suma += $matriz[$j][$i];
                    break;
            }
        }
        array_push($matrizNueva, $suma);
    }
    return $matrizNueva;
}
echo ("Suma de filas --><br>");
print_r(suma("fila", $matriz, $matrizFilas));
echo ("Suma de columnas --><br>");
print_r(suma("columna", $matriz, $matrizColumnas));

$numeroBuscar = 3;
$localizado = false;
for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {

        if ($matriz[$i][$j] == $numeroBuscar) {
            echo "El numero esta en la posicion $i,$j";

        }
    }
    echo "<br>";
}



?>
</pre>