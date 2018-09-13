<?php

require 'Profesor.php';
require 'Alumno.php';
require 'Titular.php';
require 'Adjunto.php';

class Curso
{
    private $nombre;
    private $codigoCurso;
    private $titular;
    private $adjunto;
    private $addAlumno;

    public function __construct(String $nombre, int $codigoCurso)
    {
        $this->setNombre($nombre);
        $this->setCodigoCurso($curso);
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setCodigoCurso($codigoCurso)
    {
        $this->codigoCurso = $codigoCurso;
    }
    public function getCodigoCurso()
    {
        return $this->codigoCurso;
    }

    public function setTitular(Titular $titular)
    {
        $this->tituar = $titular;
    }
    public function getTitular()
    {
        return $this->Titular;
    }

    public function setAdjunto(Adjunto $adjunto)
    {
        $this->adjunto = $adjunto;
    }
    public function getAdjunto()
    {
        $this->adjunto = $adjunto;
    }

    public function setAddAlumno(Alumno $addAlumno)
    {
        $this->addAlumno[] = $addAlumno;
    }
    public function getAddAlumno()
    {
        return $this->addAlumno;
    }
}

$alumno = new Alumno ("Nahuel", "Di Biase", 999);
$profesor = new Titulares("Nahuel", "Di Biase", 20, 5, "Capo");
$adjunto = new Adjunto("Rodo", "Rodo", 5, 2, 50);
$curso = new Curso ();