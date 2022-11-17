<?php
$matriz = array(
    "Ourense" => array("ingresos" => 1200, "gastos" => 700),
    "La Coruña" => array("ingresos" => 1200, "gastos" => 700),
    "Lugo" => array("ingresos" => 1200, "gastos" => 600),
    "Pontevedra" => array("ingresos" => 1200, "gastos" => 700)
);
function recogida($matriz)
{
    $ingreso = 0;
    $gasto = 0;
    $contador = 0;
    $resta = 0;
    $comparacion = 0;
    $provinciaMejor = "";
    foreach ($matriz as $provincias => $key) {
        foreach ($key as $clave => $valor) {
            if ($clave == 'ingresos') {
                $ingreso = $valor;
                $contador++;
            } else if ($clave == "gastos") {
                $gasto = $valor;
                $contador++;
            }

            if ($contador % 2 == 0) {
                $resta = $ingreso - $gasto;
                if ($comparacion < $resta) {
                    $comparacion = $resta;
                    $provinciaMejor = $provincias;
                }
            }


        }
    }
    return $provinciaMejor;
}
echo recogida($matriz);
?>