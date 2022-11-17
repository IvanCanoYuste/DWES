<?php
//script que invoca a las funciones

require_once("./ejercicio21.php");

//probar la función del apartado a)
//funcion_aleatoria();

//probar la función variable del apartado b)

//$juego='funcion_aleatoria';
//$juego();

//probar la función anónima y callback

$funcion_aleatoria=function()
{
    $n=rand(1,6);
    if ($n==6)
       echo "¡Enhorabuena! el valor obtenido es $n";
    else
       echo "Intentelo de nuevo. El valor obtenido es $n";  
};
jugar($funcion_aleatoria);//callback

//script de funciones


//apartado a) funcion tradicional
function funcion_aleatoria()
{
    $n=rand(1,6);
    if ($n==6)
       echo "¡Enhorabuena! el valor obtenido es $n";
    else
       echo "Intentelo de nuevo. El valor obtenido es $n";   
}

//apartado c) funcion anónima y callback

function jugar($funcion_aleatoria)
{
    $funcion_aleatoria();
}
