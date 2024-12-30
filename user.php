<?php 
require_once "database.php";
class user{
    private $nom;
    private $email;
    private $password;
    public function __construct($nom,$email,$password){
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;
    }
    public function getNom(){
       return $this->nom;

    }
    public function getPassword(){
        return $this->password;

    }
    public function getEmail(){
        return  $this->email;

    }
}




?>