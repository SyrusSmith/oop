<?php

require 'Profesor.php';

class Titular extends Profesor
{
    private $especialidad;

    public function __construct(String $nombre, String $apellido, int $antiguedad, int $codigoProfesor, String $especialidad)
    {
        parent::__construct($nombre, $apellido, $antiguedad, $codigoProfesor);
        $this->setEspecialidad($especialidad);
    }

    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }
    public function getEspecialidad()
    {
        return $this->especialidad;
    }
}

// $profesor = new Titulares("Nahuel", "Di Biase", 20, 5, "Capo");
// echo "<pre>";
// var_dump($profesor);
// echo "</pre>";