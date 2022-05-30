<?php


/**
 * Function qui permet d'établir la co a la BDD 
 * retourne la connexion
 */
function etablirCo()
{
    $urlSGBD="localhost";
    $nomBDD="topball"; // le nom de la BDD
    $loginBDD="root";
    $mdpBDD="";// le mdp est root si on utilise Mamp
    try{
    $connex = new PDO("mysql:host=$urlSGBD;dbname=$nomBDD", "$loginBDD", "$mdpBDD", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $error) {
        echo "Il y a un problème de co a la BDD verifier que la bdd est presente et les lignes 7 à 10 du fichier bdd.php<br>";
        echo $error->getMessage();
    }
    
    return $connex;
}

/**
 * Permet de recuperer les infos des joueurs
 */
/*function getAllJoueur(){

        try {
            require("./modele/classes/joueurs/joueurs_class.php");
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT * FROM joueur ORDER BY idJoueur");
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Joueurs"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }*/

/**
 * Permet de recuperer les infos d'un joueur précis
 */

    function getJoueurById($id)
    {
        try {
            $connex=etablirCo();
            //ATTENTION NE PAS AJOUTER L'ID COMME CELA DANS UNE VRAI APP
            //CAR ON NE PROTEGE PAS CONTRE LES INJECTIONS SQL
            $sql =$connex->prepare("SELECT * FROM joueur WHERE idJoueur=$id ");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat[0];

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

/**
 * Permet de recuperer les infos d'une equipe
 */

    function getEquipeById(){ 

        try {
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT * FROM equipe ORDER BY idEquipe");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

/**
 * Permet de recuperer les infos des personnages 
 */

    function getAllPersonnage(){

        try {
            require("./modele/classes/personnage/personnage_class.php");
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT * FROM `equipe_personnage` NATURAL JOIN personnage ORDER BY idEquipe");
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Personnages"));
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

/**
 * Permet de recuperer les infos d'un personnage correspondant a une equipe spécifique
 */

    function getUnPersonnage($idEquipe,$idPersonnage){

        try {
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT * FROM `equipe_personnage` NATURAL JOIN personnage WHERE idEquipe =$idEquipe AND idPersonnage=$idPersonnage");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

/**
 * Permet de recuperer les infos d'une formule(un pack)
 */

    
    function getClassement(){

        try {
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT * FROM `equipe_partie` NATURAL JOIN equipe NATURAL JOIN joueur");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getNbVictoire(){

        try {
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT COUNT(idPartie) FROM partie NATURAL JOIN equipe_partie WHERE idEquipe=1 AND estGagnant=1");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getNbDefaite(){

        try {
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT COUNT(idPartie) FROM partie NATURAL JOIN equipe_partie WHERE idEquipe=1 AND estGagnant=0");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getPartieTotalEquipe($idEquipe){

        try {
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT COUNT(idPartie) FROM partie NATURAL JOIN equipe_partie WHERE idEquipe=$idEquipe");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getPourcentageV($idEquipe){

        try {
            $connex=etablirCo();
            $sql =$connex->prepare("SELECT 100/ COUNT(idPartie)* COUNT(estGagnant=1) FROM partie NATURAL JOIN equipe_partie WHERE idEquipe=$idEquipe");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function addJoueur($nom,$prenom,$email,$age,$pseudo){

        try {
            $connex=etablirCo();
            $sql =$connex->prepare("INSERT INTO joueur (nom,prenom,email,age,pseudo) VALUES ('$nom','$prenom','$email','$age','$pseudo')");
            $sql->execute();
            $resultat = ($sql->fetchAll());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    









?>