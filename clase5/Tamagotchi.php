<?php

class Tamagotchi
{
    private $estado;

    public function __construct(Estado $estado)
    {
        $this->setEstado($estado);
    }

    public function setEstado(Estado $estado)
    {
        $this ->estado = $estado;
    }

    public function comer()
    {
        $this->estado->comer();
    }

    public function tomar()
    {
        $this->estado->tomar();
    }

    public function mimos()
    {
        $this->estado->mimos();
    }
}