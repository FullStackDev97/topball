<?php 

class Commentaires {
   private $idCommentaire;
   private $contenuCom;
   private $dateCom;
   private $idJoueur;
   private $idArticle;
    



















   
   public function getIdCommentaire()
   {
      return $this->idCommentaire;
   }

    
   public function setIdCommentaire($idCommentaire)
   {
      $this->idCommentaire = $idCommentaire;

      return $this;
   }

    
   public function getContenuCom()
   {
      return $this->contenuCom;
   }

    
   public function setContenuCom($contenuCom)
   {
      $this->contenuCom = $contenuCom;

      return $this;
   }

   
   public function getDateCom()
   {
      return $this->dateCom;
   }

   
   public function setDateCom($dateCom)
   {
      $this->dateCom = $dateCom;

      return $this;
   }

    
   public function getIdJoueur()
   {
      return $this->idJoueur;
   }

    
   public function setIdJoueur($idJoueur)
   {
      $this->idJoueur = $idJoueur;

      return $this;
   }

   
   public function getIdArticle()
   {
      return $this->idArticle;
   }

   
   public function setIdArticle($idArticle)
   {
      $this->idArticle = $idArticle;

      return $this;
   }
}
































?>