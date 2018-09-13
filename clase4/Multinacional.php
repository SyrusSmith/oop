<?php

require_once('Empresa.php');

class Multinacional extends Empresa{

    protected $paisDeOrigen;

    public function __construc($cuit,$razonSoc,$inicioAct,$paisDeOrigen)
    {
        parent::__construc($cuit,$razonSoc,$inicioAct);
        $this->paisDeOrigen = $paisDeOrigen;
    }

    public function setPaisDeOrigen($paisDeOrigen){
        $this->paisDeOrigen = $paisDeOrigen;
    }
    public function getPaisDeOrigen(){
        return $this->paisDeOrigen;
    }
}

$multinacional = new multinacional('20-33306761-8',"Di Biase's Inc.",'30/10/1987','Irlanda');
var_dump($multinacional);

