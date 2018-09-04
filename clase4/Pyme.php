<?php

require_once('Empresa.php');

class Pyme extends empresa{

    public function __construc($cuit,$razonSoc,$inicioAct)
    {
        parent::__construc($cuit,$razonSoc,$inicioAct);
    }
}

$pyme = new pyme('20-33306761-8',"Di Biase's Inc.",'30/10/1987');
var_dump($pyme);