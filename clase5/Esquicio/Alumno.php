<?php

class Alumno
{
    private $nombre;
    private $apellido;
    private $codigo;

    public function __construct(String $nombre, String $apellido, int $codigoAlumno)
    {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCodigo($codigoAlumno);
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

    public function setCodigo($codigoAlumno)
    {
        $this->codigoAlumno = $codigoAlumno;
    }
    public function getCodigo()
    {
        return $this->codigoAlumno;
    }
}