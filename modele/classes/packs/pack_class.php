<?php





class Packs  
{
    
    private $idFormule;
    private $nom;
    private $prix;
    private $image;
    



    
    

    
    public function getIdFormule()
    {
        return $this->idFormule;
    }

   
    public function setIdFormule($idFormule)
    {
        $this->idFormule = $idFormule;

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

     
    public function getPrix()
    {
        return $this->prix;
    }

    
    public function setPrix($prix)
    {
        $this->prix = $prix;

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
}













?>
