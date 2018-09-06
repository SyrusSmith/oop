<?php

abstract class Estado
{
    private $nombre;

    public function getNombre()
    {
        return $this->$nombre;
    }

    abstract public function comer();

    abstract public function tomar();

    abstract public function mimos();
}