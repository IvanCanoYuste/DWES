<?php

$numeros = [-5, -2, 4, 9, 1];

/*-----------------------------------------------------------*/
//Muestra el número de componentes negativas.
/*-----------------------------------------------------------*/
$contador = 0;


for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] < 0) {
        $contador++;
    }
}
echo "El numero de numeros negativos es : $contador<br>";

/*-----------------------------------------------------------*/
//Muestra la media de las componentes.
/*-----------------------------------------------------------*/

function media($numeros)
{
    $suma = 0;
    $media = 0;
    for ($i = 0; $i < count($numeros); $i++) {
        $suma += $numeros[$i];
    }
    $media = $suma / count($numeros);
    echo "La media es : $media<br>";
}

media($numeros);

/*-----------------------------------------------------------*/
//Visualiza las posiciones del array en las que se almacene como valor el cuadrado de su posición. 
//Si no se da esta circunstancia en ninguna componente, indícalo con un sencillo mensaje.
/*-----------------------------------------------------------*/
$contador = 0;
$mensaje = "";
for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] == ($i * $i)) {
        $mensaje .= "$i ";
        $contador++;
    }
}
if ($contador > 0) {
    if ($contador == 1) {
        echo "Las posicion es:$mensaje<br>";
    }
    else
        echo "Las posiciones son:$mensaje<br>";
}
else {
    echo "No hay numeros";
}

/*-----------------------------------------------------------*/
//Visualizar el array en orden invertido.
/*-----------------------------------------------------------*/

$numero = 0;
echo "El nuevo array es [";
for ($i = count($numeros) - 1; $i >= 0; $i--) {
    $numero = $numeros[$i];
    echo "$numero ";
}
echo "]<br>";

/*-----------------------------------------------------------*/
//Crear un nuevo array cuyos componentes tomarán como valor el doble de 
//los componentes de este primer array.
/*-----------------------------------------------------------*/
$nuevoArray = [];
for ($i = 0; $i < count($numeros); $i++) {
    array_push($nuevoArray, $numeros[$i] * 2);
}
echo "[";
for ($i = 0; $i < count($nuevoArray); $i++) {
    echo $nuevoArray[$i];
    echo " ";
}
echo "]<br>";

/*-----------------------------------------------------------*/
//Incrementa en dos más sus componentes y calcula de nuevo la media de ellas.
/*-----------------------------------------------------------*/


array_push($numeros, 2, 3);

media($numeros);


?>