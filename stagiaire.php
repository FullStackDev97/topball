<?php

class Stagiaires 
{
    private $idStagiaire;
    private $nom;
    private $prenom;
    private $email;

    public function setIdstagiaire($newId) {
        $this->idStagiaire=$newId;
    }

    public function getIdstagiaire(){
        return $this->idStagiaire;
    }

    public function setPrenom($newPrenom) {
        $this->prenom=$newPrenom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

     
    public function getNom()
    {
        return $this->nom;
    }

    
    public function setNom($nom)
    {
        $this->nom = $nom;

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

    public function __construct(){
        //$this->idStagiaire=$newId;
        echo"<br> le consctructor <br>";
    }

    public function __destruct(){
        echo"<br> le destructor <br>";
        $this->idStagiaire=null;
    }
}


$stagiaire1=new Stagiaires(90);
//var_dump($stagiaire1);
$stagiaire1-> setIdstagiaire(15);
var_dump($stagiaire1);

$stagiaire2=new Stagiaires(10);
$stagiaire2-> setIdstagiaire(8);
var_dump($stagiaire2);






?>