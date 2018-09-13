<?php

class user
{
    private $nombre;
    private $password;
    private $email;

    public function __construct($nombre, $password, $email)
{
    $this -> nombre = $nombre;
    $this -> setPassword($password);
    $this -> email = $email;
}

public function setNombre($nombre)
{
    $this->nombre = $nombre;
}

public function getNombre()
{
    return $this->nombre;
}

public function setEmail($email)
{
    $email = trim($email);
    if (empty ($email)){
        echo "El mail está vacío";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El mail es inválido";
    }
    $this->email = $email;
}

public function getEmail()
{
    return $this->email;
}

public function setPassword($password)
{

}

}