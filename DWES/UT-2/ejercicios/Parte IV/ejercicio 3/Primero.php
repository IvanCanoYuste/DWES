<?php
require_once("./Alumno.php");
class Primero extends Alumno
{
    private $calificacionPrimero;
    function __construct($nombre, $e, $nMat, $calificacion)
    {
        parent::__construct($nombre, $e, $nMat);
        $this->calificacionPrimero = $calificacion;
    }

    function supera_cursoPrimero()
    {

        if ($this->calificacionPrimero >= 5) {
            return true;
        } else
            return false;

    }


}



?>