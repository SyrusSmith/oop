<?php

require 'Profesor.php';

class Adjunto extends Profesor
{
    private $horasConsulta;

    public function __construct(String $nombre, String $apellido, int $antiguedad, int $codigoProfesor, int $horasConsulta)
    {
            parent::__construct($nombre, $apellido, $antiguedad, $codigoProfesor);
            $this->setHorasConsulta($horasConsulta);
    }

    public function setHorasConsulta($horasConsulta)
    {
        $this->horasConsulta = $horasConsulta;
    }
    public function getHorasConsulta()
    {
        return $this->horasConsulta;
    }
}

// $profesor = new Adjunto("Trivador", "Ríos", 5, 2, 50);
// echo "<pre>";
// var_dump($profesor);
// echo"</pre>";