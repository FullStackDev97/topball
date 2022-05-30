<?php





class Equipes  
{
    
    private $idEquipe;
    private $nom;
    private $idJoueur;
    



    
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }

    
    public function setIdEquipe($idEquipe)
    {
        $this->idEquipe = $idEquipe;

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

    
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

     
    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;

        return $this;
    }
}































?>
