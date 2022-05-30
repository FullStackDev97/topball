<?php 


class Articles{
    
    private $idArticle;
    private $titreArticle;
    private $contenuArticle;
    private $dateCreation;
    private $thumbnailArticle;
    private $prenom;
    private $nom;
    















    public function getIdArticle()
    {
        return $this->idArticle;
    }

    
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    
    public function getTitreArticle()
    {
        return $this->titreArticle;
    }

     
    public function setTitreArticle($titreArticle)
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    
    public function getContenuArticle()
    {
        return $this->contenuArticle;
    }

    
    public function setContenuArticle($contenuArticle)
    {
        $this->contenuArticle = $contenuArticle;

        return $this;
    }

    
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

     
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

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

    
    public function getThumbnailArticle()
    {
        return $this->thumbnailArticle;
    }

    
    public function setThumbnailArticle($thumbnailArticle)
    {
        $this->thumbnailArticle = $thumbnailArticle;

        return $this;
    }
}



























?>