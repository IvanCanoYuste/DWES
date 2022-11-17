<?php

function validarAula()
{
    if (
        $_POST["aula"] == "11" || $_POST["aula"] == "12" || $_POST["aula"] == "13" ||
        $_POST["aula"] == "14" || $_POST["aula"] == "25" || $_POST["aula"] == "34"
    ) {
        return true;
    } else
        return false;
}

function determinarTecnologias($array)
{
    $contarElementos = [];
    foreach ($array as $asig => $valor) {
        foreach ($valor as $año => $lenguaje) {
            if (array_search($lenguaje, $contarElementos) === false && $lenguaje != "") {
                array_push($contarElementos, $lenguaje);
            }
        }
    }
    return count($contarElementos);


}

function devolverTecnologia($array)
{
    foreach ($array as $asig => $valor) {
        foreach ($valor as $año => $lenguaje) {
            if ($_POST["ciclos"] == $asig && $_POST["curso"] == $año) {
                if ($lenguaje == "") {
                    return "No se enseña ninguna tecnologia<br><br>";
                } else
                    return "La tecnologia de desarrollo segun los datos recogidos en el formulario es $lenguaje<br><br>";
            }
        }
    }
}

?>