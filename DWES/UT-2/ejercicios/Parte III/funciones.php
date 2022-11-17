<?php

function cubo($valor): ?int
{
    if (is_null($valor)) {
        return NULL;
    }
    else
        return ($valor ** 3);
}

function resta(int $a, int $b)
{
    $r = $a - $b;
    return $r;
}

function multiplicar_A($n)
{
    $tabla = "";
    for ($i = 1; $i <= 10; $i++) {
        $producto = $n * $i;
        $tabla .= $n . 'x' . $i . '=' . $producto . '<br>';
    }
    echo $tabla;
}

function multiplicar_B($n)
{
    $tabla = "";
    for ($i = 1; $i <= 10; $i++) {
        $producto = $n * $i;
        $tabla .= $n . 'x' . $i . '=' . $producto . '<br>';
    }
    return $tabla;
}
?>