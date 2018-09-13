<?php

abstract class Profesor
{
    protected $nombre;
    protected $apellido;
    protected $antiguedad;
    protected $codigoProfesor;

    public function __construct(String $nombre, String $apellido, int $antiguedad, int $codigoProfesor)
    {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setAntiguedad($antiguedad);
        $this->setCodigoProfesor($codigoProfesor);
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getApellido()
    {
        return $this->apellido;
    }

    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;
    }
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    public function setCodigoProfesor($codigoProfesor)
    {
        $this->codigoProfesor = $codigoProfesor;
    }
    public function getCodigoProfesor()
    {
        return $this->codigoProfesor;
    }

}

// $profesor = new Profesor("Daniel", "Fuentes", 20, 5);
// var_dump($profesor);