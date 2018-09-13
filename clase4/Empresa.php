<?php

class Empresa{

    protected $cuit;
    protected $razonSoc;
    protected $inicioAct;

    public function __construct($cuit,$razonSoc,$inicioAct){
    $this->cuit = $cuit;
    $this->razonSoc = $razonSoc;
    $this->inicioAct = $inicioAct;
    }

    public function setCuit($cuit){
    $this->cuit = $cuit;
    }
    public function getCuit(){
    return $this->cuit;
    }
    public function setRazonSoc($razonSoc){
    $this->razonSoc = $razonSoc;
    }
    public function getRazonSoc(){
    return $this->razonSoc;
    }
    public function setinIcioAct($inicioAct){
    $this->inicioAct = $inicioAct;
    }
    public function getinicioAct(){
    return $this->inicioAct;
    }
}