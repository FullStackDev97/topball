<?php
 class Admin 
 {
     private $idAdmin;
     private $prenom;
     private $nom;
     private $pseudo;
     private $mdp;

     
     public function getIdAdmin()
     {
          return $this->idAdmin;
     }

     
     public function setIdAdmin($idAdmin)
     {
          $this->idAdmin = $idAdmin;

          return $this;
     }

     
     public function getPrenom()
     {
          return $this->prenom;
     }

      
     public function setPrenom($prenom)
     {
          $this->prenom = $prenom;

          return $this;
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

      
     public function getPseudo()
     {
          return $this->pseudo;
     }

     
     public function setPseudo($pseudo)
     {
          $this->pseudo = $pseudo;

          return $this;
     }

      
     public function getMdp()
     {
          return $this->mdp;
     }

     
     public function setMdp($mdp)
     {
          $this->mdp = $mdp;

          return $this;
     }
 }
 






?>