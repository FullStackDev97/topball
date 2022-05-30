<?php

require("./modele/classes/admin/admin_class.php");

class AdminManager 
{
    private $lePDO;


    
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


    function getAllJoueur(){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM joueur ORDER BY idJoueur");
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Joueurs"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getUnAdminById($id){

        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM admin WHERE idAdmin=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Admin");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    

    

    function getUnAdminByPseudoAndPassword($pseudo,$mdp){

        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM admin WHERE pseudo=:pseudo and mdp=:mdp");
            $sql->bindParam(":pseudo",$pseudo);
            $sql->bindParam(":mdp",$mdp);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Admin");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getUnAdminByPseudo($pseudo){

        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM admin WHERE pseudo=:pseudo");
            $sql->bindParam(":pseudo",$pseudo);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Admin");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }



    

}
?>