<?php
require_once("./Alumno.php");
class Segundo extends Alumno
{
    private $calificacionSegundo;
    private $FCT;
    private $calificacionModuloProyecto;
    function __construct($nombre, $e, $nMat, $calificacion, $FCT, $calificacionModuloProyecto)
    {
        parent::__construct($nombre, $e, $nMat);
        $this->calificacionSegundo = $calificacion;
        $this->FCT = $FCT;
        $this->calificacionModuloProyecto = $calificacionModuloProyecto;
    }

    function supera_cursoSegundo($supera_cursoPrimero)
    {
        if ($supera_cursoPrimero) {
            if ($this->FCT == "APTO") {
                if ($this->calificacionModuloProyecto >= 5) {
                    return true;
                }
            }
        }
    }


}



?>