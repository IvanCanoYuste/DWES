<?php
require_once("./Primero.php");
require_once("./Segundo.php");
$primero = new Primero("Manolo", 27, 007, 6);
$segundo = new Segundo("Manolo", 27, 007, 7, "APTO", 5);
if ($primero->supera_cursoPrimero()) {
    echo "Ha superado el primer curso";
}
if ($segundo->supera_cursoSegundo($primero->supera_cursoPrimero())) {
    echo "Ha pasado segundo";
} else
    echo "No ha superado segundo"





    ?>