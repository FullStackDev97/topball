<?php

class Tournoi
{
    private $idTournoi;
    private $nom;
    private $dateDebut;
    private $dateFin;
    private $idDivision;

    public function setIdTournoi($newId)
    {
        $this->idTournoi = $newId;
    }

    public function getIdTournoi()
    {
        return $this->idTournoi;
    }

    public function setNom($newNom)
    {
        $this->nom = $newNom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setDateDebut($newDateDebut)
    {
        $this->dateDebut = $newDateDebut;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

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
}

?>