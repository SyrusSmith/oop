<?php

abstract class Cuenta{

    protected $cbu;
    protected $balance;
    protected $ultimoMovimiento;

    public function __construct($cbu){
    $this->cbu = $cbu;
    }

    public function setCbu($cbu){
    $this->cbu = $cbu;
    }
    public function getCbu(){
    return $this->cbu;
    }
    public function setBalance($balance){
    $this->balance = $balance;
    }
    public function getBalance(){
    return $this->balance;
    }
    public function setUltimoMovimiento($ultimoMovimiento){
    $this->ultimoMovimiento = $ultimoMovimiento;
    }
    public function getUltimoMovimiento(){
    return $this->ultimoMovimiento;
    }

}