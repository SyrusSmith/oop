<?php

Class User
{
    public $id;
    public $username;
    public $email;
    public $password;

    public function __construct($id, $username, $email, $password)
    {
        $this->$id = $id;
        $this->$username = $username;
        $this->$email = $email;
        $this->password = $password;
    }

    //Getters & Setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}


// $nuevoUsuario = new User(2, "Nahuel", "nahuel@gmail.com", "1234");

// var_dump($nuevoUsuario);