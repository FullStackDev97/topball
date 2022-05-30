<?php

require("./modele/classes/equipe/equipe_class.php");


class EquipeManager 
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

    function getUneEquipeById($id){

        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM equipe WHERE idEquipe=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Equipes");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getUneEquipeByIdjoueur($id){

        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM equipe WHERE idJoueur=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Equipes");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }



}




    ?>    