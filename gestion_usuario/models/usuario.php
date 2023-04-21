<?php
class Usuario{
    private $id;
    private $username;
    private $password;
    private $name;

    public function getId(){
        return $this->id;
    }
    public function setId($value){
        $this->id = $value;
    }
    public function getUsername(){
        return $this->username;
    }

    public function setUsername($value){
        $this->username = $value;
    }
    public function getPassword(){
        return $this->username;
    }

    public function setPassword($value){
        $this->username = $value;
    }
    public function getName(){
        return $this->username;
    }

    public function setName($value){
        $this->username = $value;
    }
}
?>