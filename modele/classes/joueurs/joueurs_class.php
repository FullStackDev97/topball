<?php

class Joueurs  
{
    private $idJoueur;
    private $nom;
    private $prenom;
    private $email;
    private $age;
    private $pseudo;
    private $active;
    private $idDivision;
    private $mdp;
    private $imageProfil;

    public function setIdJoueur($newId)
    {
        $this->idJoueur = $newId;
    }

    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    public function setPrenom($newPrenom)
    {
        $this->prenom = $newPrenom;
    }

    public function getPrenom()
    {
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

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this->pseudo;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    

    /*public function __construct()
    {
        //$this->idStagiaire=$newId;
        echo "<br> le consctructor <br>";
    }

    public function __destruct()
    {
        echo "<br> le destructor <br>";
        $this->idStagiaire = null;
    }*/

    
    public function getMdp()
    {
        return $this->mdp;
    }

    
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    
    public function getImageProfil()
    {
        return $this->imageProfil;
    }

    
    public function setImageProfil($imageProfil)
    {
        $this->imageProfil = $imageProfil;

        return $this;
    }

   
    public function getIdDivision()
    {
        return $this->idDivision;
    }

    public function setIdDivision($idDivision)
    {
        $this->idDivision = $idDivision;

        return $this;
    }

   
    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}



// stagiaire n1



?>