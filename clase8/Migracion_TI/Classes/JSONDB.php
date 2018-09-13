<?php

require 'DB.php';

class JSONDB extends DB
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function setFile($file)
    {
        $this->file = file_get_contents($file);
    }

    public function dbConnect()
    {
        $db = $this->setFile($file);
        $arr = explode(PHP_EOL, $db);
        array_pop($arr);

        foreach($arr as $user) {
            $usersArray[] = json_decode($user, true);
        }

        return $usersArray;
    }

    public function dbEmailSearch($email)
    {
        $users = dbConnect();
        foreach($users as $user) {
            if($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

    public function saveUser()
    {
        //.. WIP
    }
}

$jsonDB = new JSONDB("../users.json");

$jsonDB->dbConnect();
