<?php

require("./modele/classes/joueurs/joueurs_class.php");


class JoueurManager 
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
    * Une methode qui permet d'extraire tous les Joueurs de la table stagiaires
    * de notre BDD
    * @return Un array d'objets de la classe Joueurs
    */

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

    function getUnJoueurById($id){

        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM joueur WHERE idJoueur=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Joueurs");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function updateUnJoueur(Joueurs $unJoueur){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("UPDATE Joueur set nom=:nom,prenom=:prenom,email=:email,age=:age,pseudo=:pseudo,mdp=:mdp where idJoueur=:id");
            $sql->bindParam(":nom",$unJoueur->getNom());
            $sql->bindParam(":prenom",$unJoueur->getPrenom());
            $sql->bindParam(":email",$unJoueur->getEmail());
            $sql->bindParam(":age",$unJoueur->getAge());
            $sql->bindParam(":pseudo",$unJoueur->getPseudo());
            $sql->bindParam(":mdp",$unJoueur->getMdp());
            $sql->bindParam(":id",$unJoueur->getIdJoueur());
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Joueurs"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function addUnJoueur($nom,$prenom,$email,$age,$pseudo,$password){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("INSERT INTO Joueur (nom,prenom,email,age,pseudo,mdp) VALUES (:nom,:prenom,:email,:age,:pseudo,:mdp)");
            $sql->bindParam(":nom",$nom);
            $sql->bindParam(":prenom",$prenom);
            $sql->bindParam(":email",$email);
            $sql->bindParam(":age",$age);
            $sql->bindParam(":pseudo",$pseudo);
            $sql->bindParam(":mdp",$password);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Joueurs"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getUnJoueurByPseudoAndPassword($pseudo,$mdp){

        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM joueur WHERE pseudo=:pseudo and mdp=:mdp");
            $sql->bindParam(":pseudo",$pseudo);
            $sql->bindParam(":mdp",$mdp);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Joueurs");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }



    

}





?>