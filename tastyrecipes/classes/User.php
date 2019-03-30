<?php

namespace classes\Model;

class User{
    private $username;
    private $password;

    public function __construct($usr, $pwd){
        $this->username = $usr;
        $this->password = $pwd;
    }

    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
}