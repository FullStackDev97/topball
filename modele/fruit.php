<?php

    class Fruit{
        private $couleur;
        private $nom;
        private $avoirPepin;
        private $avoirNoyau;

        public function __construct($uneCouleur,$unNom,$unPepin,$unNoyau){
            $this ->couleur = $uneCouleur;
            $this ->nom = $unNom;
            $this ->avoirPepin = $unPepin;
            $this ->avoirNoyau = $unNoyau;
        }

        public function quiSuisJe(){
            return "Je suis un/une"+$this ->nom." J'ai comme couleur ".$this ->couleur;
        }

        public function getCouleur(){
            return $this->couleur;
        }

        public function setNom($newNom){
            $this->nom=$newNom;
        }
    }

    $objet1=new Fruit ("orange","orange",true,false);

    echo $objet1->getCouleur();

    $objet1->setNom("Banane");
    var_dump($objet1);

    
    /*
    var_dump($objet1);
    $objet1->couleur="Orange";
    var_dump($objet1);*/

    
?>