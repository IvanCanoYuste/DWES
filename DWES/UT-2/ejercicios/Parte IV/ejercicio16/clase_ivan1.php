<?php
class Tecnologia
{
    private $aula;
    private $ciclo;
    private $curso;

    function __construct($aula, $ciclo, $curso)
    {
        $this->aula = $aula;
        $this->ciclo = $ciclo;
        $this->curso = $curso;
    }

    function __toString()
    {


        return "La selección realizada es: <br>Aula: " . $this->aula . "<br>Ciclo: " . $this->ciclo . "<br>Curso: " . $this->curso;
    }
}
?>