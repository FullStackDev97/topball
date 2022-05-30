<?php

require("./modele/classes/packs/pack_class.php");


class PackManager 
{
    private $lePDO;


    /*
    *Le consstructeur de  la classe Joueur_manager
    *qui permet de créer un objet grace a un objet de classe PDO
    *fournit en argument
    *@param un objet de type PDO qui represente la co a la BDD
    */ 
    public function __construct($unPDO)
    {
        $this->lePDO=$unPDO;
    }

    
    public function getLePDO()
    {
        return $this->lePDO;
    }

    
    public function setLePDO($lePDO)
    {
        $this->lePDO = $lePDO;

        return $this;
    }

    function getAllPacks()
    {

        try {
            $connex = etablirCo();
            $sql = $connex->prepare("SELECT * FROM `formule` ORDER BY idFormule");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Packs");
            $resultat = ($sql->fetchAll());
            return $resultat;
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }


    function getPackbyId($id)
    {

        try {
            $connex = etablirCo();
            $sql = $connex->prepare("SELECT * FROM `formule` WHERE idFormule=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Packs");
            $resultat = ($sql->fetch());
            return $resultat;
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }


    



}
