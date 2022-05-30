<?php 

    require("./modele/classes/tournoi/tournoi_class.php");

    class TournoiManager 
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

    /*
    * Une methode qui permet d'extraire tous les Personnages de la table personnage
    * de notre BDD
    * @return Un array d'objets de la classe Personnage
    */

    function getAllTournoi(){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM tournoi ORDER BY idTournoi");
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Tournoi"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }


    function getUnTournoiById($id){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM tournoi WHERE idTournoi=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Tournoi");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    

    public function updateUnTournoi($nom,$dateDebut,$dateFin,/*$idDivision,*/$idTournoi){

        try {
             
            $connex=$this->lePDO;
            $sql =$connex->prepare("UPDATE tournoi set nom=:nom,dateDebut=:dateDebut,dateFin=:dateFin WHERE idTournoi=:id");
            $sql->bindParam(":nom",$nom);
            $sql->bindParam(":dateDebut",$dateDebut);
            $sql->bindParam(":dateFin",$dateFin);
            //$sql->bindParam(":idDivison",$idDivision);
            $sql->bindParam(":id",$idTournoi);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Tournoi"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function addUnTournoi($nom,$dateDebut,$dateFin,$idDivision){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("INSERT INTO Tournoi (nom,dateDebut,dateFin,idDivision) VALUES (:nom,:dateDebut,:dateFin,:idDivison)");
            $sql->bindParam(":nom", $nom);
            $sql->bindParam(":dateDebut", $dateDebut);
            $sql->bindParam(":dateFin", $dateFin);
            $sql->bindParam(":idDivison", $idDivision);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Tournoi"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function supprimeUnTournoiById($id)
    {

        try {

            $connex = $this->lePDO;
            //$connex->beginTransaction();
            /*$sql = $connex->prepare("DELETE FROM equipe_Tournoi WHERE idTournoi=:uneid ");
            $sql->bindParam(":uneid", $id);
            $sql->execute();*/
            $sql2 = $connex->prepare("DELETE FROM Tournoi WHERE idTournoi=:uneid");
            $sql2->bindParam(":uneid", $id);
            $sql2->execute();
           // $connex->commit();            
            //$sql->setFetchMode(PDO::FETCH_CLASS, "Tournois");
            //$resultat = ($sql->fetch());
            //return $resultat;
        } catch (PDOException $error) {
            //$connex->rollBack();
            echo $error->getMessage();
        }
    }


}

?>