<?php

    class Rencontre {
        private $nomEquipe1;
        private $nomEquipe2;
        private $score;
        private $lieuDerencontre;
        private $daterencontre;

        public function getEquipe1(){

        }
    }

    class Equipe{
        private $formation;
        private $equipeTitulaire;
        private $remplacent;
    }

    class Joueur{
        private $nom;
        private $prenom;
        private $poste;
        private $numero;
        private $lateralite;

        public function __construct($unNom,$unPrenom,$unPoste,$unNumero,$uneLateralite){
            $this ->nom= $unNom;
            $this ->prenom= $unPrenom;
            $this ->poste= $unPoste;
            $this ->numero= $unNumero;
            $this ->lateralite= $uneLateralite;
        }
    }













?>