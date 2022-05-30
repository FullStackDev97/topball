<?php 

    require("./modele/classes/personnage/personnage_class.php");

    class PersonnageManager 
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

    function getAllPersonnage(){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM personnage ORDER BY idPersonnage");
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Personnages"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }


    function getUnPersonnageById($id){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM personnage WHERE idPersonnage=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Personnages");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function supprimeUnPersonnageById($id)
    {

        try {

            $connex = $this->lePDO;
            $connex->beginTransaction();
            $sql = $connex->prepare("DELETE FROM equipe_personnage WHERE idPersonnage=:uneid ");
            $sql->bindParam(":uneid", $id);
            $sql->execute();
            $sql2 = $connex->prepare("DELETE FROM personnage WHERE idPersonnage=:uneid");
            $sql2->bindParam(":uneid", $id);
            $sql2->execute();
            $connex->commit();            
            //$sql->setFetchMode(PDO::FETCH_CLASS, "Personnages");
            //$resultat = ($sql->fetch());
            //return $resultat;
        } catch (PDOException $error) {
            $connex->rollBack();
            echo $error->getMessage();
        }
    }

    function getPersonnageParEquipe($id){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM `equipe_personnage` NATURAL JOIN personnage WHERE idEquipe=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Personnages"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function updateUnPersonnage($nom,$prenom,$poste,$age,$notation,$rarete,$id_perso ){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("UPDATE personnage set nom=:nom,prenom=:prenom,poste=:poste,age=:age,notation=:notation,rarete=:rarete where idPersonnage=:id");
            $sql->bindParam(":nom",$nom);
            $sql->bindParam(":prenom",$prenom);
            $sql->bindParam(":poste",$poste);
            $sql->bindParam(":age",$age);
            $sql->bindParam(":notation",$notation);
            $sql->bindParam(":rarete",$rarete);
            $sql->bindParam(":id",$id_perso);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Personnages"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function addUnPersonnage($nom,$prenom,$poste,$age,$notation,$rarete){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("INSERT INTO Personnage (nom,prenom,poste,age,notation,rarete) VALUES (:nom,:prenom,:poste,:age,:notation,:rarete)");
            $sql->bindParam(":nom",$nom);
            $sql->bindParam(":prenom",$prenom);
            $sql->bindParam(":poste",$poste);
            $sql->bindParam(":age",$age);
            $sql->bindParam(":notation",$notation);
            $sql->bindParam(":rarete",$rarete);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Personnages"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }




}


?>