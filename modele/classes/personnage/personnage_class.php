<?php





class Personnages  
{
    
    private $nom;
    private $poste;
    private $notation;
    private $age;
    private $image;
    private $rarete;
    private $idPersonnage;
    private $idEquipe;
    private $prenom;




    
    public function getIdPerso()
    {
        return $this->idPersonnage;
    }

    
    public function setIdPerso($idPersonnage)
    {
        $this->idPersonnage = $idPersonnage;

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

    
    public function getPoste()
    {
        return $this->poste;
    }

    
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    
    public function getNotation()
    {
        return $this->notation;
    }

    
    public function setNotation($notation)
    {
        $this->notation = $notation;

        return $this;
    }

    
    public function getAge()
    {
        return $this->age;
    }

     
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    
    public function getImage()
    {
        return $this->image;
    }

    
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    
    public function getRarete()
    {
        return $this->rarete;
    }

    
    public function setRarete($rarete)
    {
        $this->rarete = $rarete;

        return $this;
    }

    
    public function getIdPersonnage()
    {
        return $this->idPersonnage;
    }

     
    public function setIdPersonnage($idPersonnage)
    {
        $this->idPersonnage = $idPersonnage;

        return $this;
    }

    
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }

    
    public function setIdEquipe($idEquipe)
    {
        $this->idEquipe = $idEquipe;

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
}































?>
