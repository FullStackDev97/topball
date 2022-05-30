<?php

//TODO Verification Admin

if(!isset($_GET['action']))
{
    $action="";
}
else{
    $action=filter_var($_GET['action'],FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    //var_dump($action);
}

switch ($action){
    case "admin":
        //require("modele/bdd.php");
        //require('view/admin.php');
        if (isset($_SESSION['pseudo'])) {
            require('view/admin.php');
        }else {
            require('view/404.php');
        }
        
    break;

    
    case "connexion":
        
        require('view/connexion.php');
        if (isset($_SESSION['pseudo'])) {
            session_unset();
            session_destroy();
            header("location:index.php?path=main&action=connexion");
        }else {
            require('view/connexion.php');
        }
    break;

    case 'tournoi':
        require("modele/manager/tournoiManager.php");
        $unPDO = etablirCo();
        $tournoiManager = new TournoiManager($unPDO);
        $lesTournoi = $tournoiManager->getAllTournoi();
        require('view/tournoi.php');
        break;
    

    case "articles":
        //require("modele/bdd.php");
        require("modele/manager/articlesManager.php");
        $unPDO = etablirCo();
        $articlesManager=new ArticlesManager($unPDO);
        $lesarticles= $articlesManager->getAllArticlesAndAuthor();
        //var_dump($lesarticles);
        require('view/articles.php');
    break;

    case "personnages":
        //require("modele/bdd.php");
        require("modele/manager/personnageManager.php");
        //$idPerso=filter_var($_GET['num'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $persoManager=new PersonnageManager($unPDO);
        $lesPersonnages= $persoManager->getAllPersonnage();
        //$lePerso= $persoManager->getUnPersonnageById($idPerso);
        require('view/personnages.php');
    break;

    case 'update-perso':
        //require("modele/bdd.php");
        require("modele/manager/personnageManager.php");
        $idPerso=filter_var($_GET['num'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO=etablirCo();
        $persoManager=new PersonnageManager($unPDO);
        $lePerso= $persoManager->getUnPersonnageById($idPerso);
        //var_dump($lePerso);
        //echo $lePerso->getPrenom();
        require("view/update-perso.php");
    break;

    case 'update-tournoi':
        //require("modele/bdd.php");
        require("modele/manager/tournoiManager.php");
        $idTournoi=filter_var($_GET['num'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO=etablirCo();
        $tournoiManager=new TournoiManager($unPDO);
        $leTournoi= $tournoiManager->getUnTournoiById($idTournoi);
        //var_dump($leTournoi);
        //echo $lePerso->getPrenom();
        require("view/update-tournoi.php");
    break;

    case 'update-articles':
        //require("modele/bdd.php");
        require("modele/manager/articlesManager.php");
        $idarticles=filter_var($_GET['num'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO=etablirCo();
        $articlesManager=new ArticlesManager($unPDO);
        $unArticles= $articlesManager->getUnArticleById($idarticles);
        //var_dump($unArticles);
        //echo $lePerso->getPrenom();
        require("view/update-articles.php");
    break;

    case 'traitement-update-perso':
        //var_dump($_POST);
        require("modele/manager/personnageManager.php");
        $nomPersonnage=filter_var($_POST['nom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $prenomPersonnage=filter_var($_POST['prenom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $postePersonnage=filter_var($_POST['poste'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $agePersonnage=filter_var($_POST['age'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $notationPersonnage=filter_var($_POST['notation'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $raretePersonnage=filter_var($_POST['rarete'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id_perso=filter_var($_POST['id'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $unPDO=etablirCo();
        $personnageManager= new PersonnageManager($unPDO);
        $personnage=$personnageManager->updateUnPersonnage($nomPersonnage,$prenomPersonnage,$postePersonnage,$agePersonnage,$notationPersonnage,$raretePersonnage,$id_perso);
        header("location:index.php?path=admin&action=admin");
        break;

    case 'traitement-update-tournoi':
        //var_dump($_POST);
        require("modele/manager/tournoiManager.php");
        $nomTournoi = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dateDebut = filter_var($_POST['dateDebut'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dateFin = filter_var($_POST['dateFin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $idTournoi = filter_var($_POST['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //$idDivision = filter_var($_POST['idDivision'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $tournoiManager = new TournoiManager($unPDO);
        $tournoi = $tournoiManager->updateUnTournoi($nomTournoi, $dateDebut, $dateFin,/*$idDivision,*/ $idTournoi);
        header("location:index.php?path=admin&action=admin");
        break;


    case 'traitement-update-articles':
        //var_dump($_POST);
        require("modele/manager/articlesManager.php");
        $idArticle = filter_var($_POST['idArticle'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $titreArticle = filter_var($_POST['titreArticle'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $contenuArticle = filter_var($_POST['contenuArticle'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dateCreation = filter_var($_POST['dateCreation'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //$prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //$nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        $unPDO = etablirCo();
        $articlesManager = new ArticlesManager($unPDO);
        $unArticle = $articlesManager->updateUnArticles($nomTournoi, $dateDebut, $dateFin,);
        header("location:index.php?path=admin&action=admin");
        break;

    case 'traitementAjoutPerso':
        if (!isset($_SESSION['personnage'])) {
            $_SESSION['personnage'] = [];
        }

        $idPerso = filter_var($_POST['nom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        array_push($_SESSION['personnage'],$idPerso);
        break;

    case 'traitementFormJoueur':
        //require("modele/bdd.php");
        //require("modele/manager/joueurManager.php");
        $idJoueur = filter_var($_GET['num'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $joueurManager=new JoueurManager($unPDO);
        $leJoueur = $joueurManager->getUnJoueurById($idJoueur);
        //var_dump($leJoueur);
        //echo $lePerso->getPrenom();
        require("view/modifJoueur.php");
        break;

    

    case 'delete-perso':
        require("modele/manager/personnageManager.php");
        $idPerso = filter_var($_GET['num'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $persoManager = new PersonnageManager($unPDO);
        $lePerso = $persoManager->getUnPersonnageById($idPerso);
        //var_dump($_POST);
        require("view/delete-perso.php");
        break;

    case 'delete-articles':
        require("modele/manager/articlesManager.php");
        $idArticles = filter_var($_GET['num'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $ArticlesManager = new ArticlesManager($unPDO);
        $UnArticles = $ArticlesManager->getUnArticleById($idArticles);
        //var_dump($UnArticles);
        require("view/delete-articles.php");
            break; 
            
    case 'delete-tournoi':
        require("modele/manager/tournoiManager.php");
        $idTournoi = filter_var($_GET['num'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $tournoiManager = new tournoiManager($unPDO);
        $Untournoi = $tournoiManager->getUnTournoiById($idTournoi);
        //var_dump($Untournoi);
        require("view/delete-tournoi.php");
        break;

    case 'create-perso':
        
        //var_dump($_POST);
        require("view/create-perso.php");
        break;

    case 'create-articles':

        //var_dump($_POST);
        require("view/create-articles.php");
        break;

    case 'create-tournoi':

        //var_dump($_POST);
        require("view/create-tournoi.php");
        break;   

    case 'traitement-create-perso':
        require("modele/manager/personnageManager.php");
            $unPDO = etablirCo();
            $prenom=filter_var($_POST['prenom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $nom=filter_var($_POST['nom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $poste=filter_var($_POST['poste'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $age=filter_var($_POST['age'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $rarete=filter_var($_POST['rarete'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $notation=filter_var($_POST['notation'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //var_dump($_POST);
            $persoManager = new PersonnageManager($unPDO);
            $nouveauPerso= $persoManager->addUnPersonnage($nom,$prenom,$poste,$age,$notation,$rarete);
            //header("location:index.php?path=main&action=create");
        break;


    case 'traitement-create-articles':
        require("modele/manager/articlesManager.php");
        $unPDO = etablirCo();
        $titreArticle = filter_var($_POST['titreArticle'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $contenuArticle = filter_var($_POST['contenuArticle'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dateCreation = filter_var($_POST['dateCreation'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $thumbnailArticle= filter_var($_POST['thumbnailArticle'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $idAdmin = filter_var($_POST['idAdmin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //var_dump($_POST);
        $articleManager = new ArticlesManager($unPDO);
        $newArticle = $articleManager->addUnArticles($titreArticle, $contenuArticle, $dateCreation,$thumbnailArticle, $idAdmin);
        //header("location:index.php?path=main&action=create");
        break;


    case 'traitement-create-tournoi':
        require("modele/manager/tournoiManager.php");
        $unPDO = etablirCo();
        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dateDebut = filter_var($_POST['dateDebut'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dateFin = filter_var($_POST['dateFin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $idDivision = filter_var($_POST['idDivision'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        //var_dump($_POST);
        $persoManager = new TournoiManager($unPDO);
        $nouveauPerso = $persoManager->addUnTournoi($nom, $dateDebut, $dateFin, $idDivision);
        //header("location:index.php?path=main&action=create");
        break;

    case 'traitement-delete-perso':
        require("modele/manager/personnageManager.php");
        $id = filter_var($_POST['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $persoManager = new PersonnageManager($unPDO);
        $persoManager->supprimeUnPersonnageById($id);
        header("location:index.php?path=main&action=delete-perso");
        break;

    case 'traitement-delete-articles':
        require("modele/manager/articlesManager.php");
        $id = filter_var($_POST['idArticle'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $articlesManager = new ArticlesManager($unPDO);
        $articlesManager->supprimeUnArticlesById($id);
        header("location:index.php?path=main&action=delete-articles");
        break;

    case 'traitement-delete-tournois':
        require("modele/manager/tournoiManager.php");
        $id = filter_var($_POST['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $tournoiManager = new TournoiManager($unPDO);
        $tournoiManager->supprimeUnTournoiById($id);
        header("location:index.php?path=main&action=delete-tournoi");
        break;       
  

    case 'read-perso':
        require("modele/manager/personnageManager.php");
        $idPerso = filter_var($_GET['num'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $persoManager = new PersonnageManager($unPDO);
        $lePerso = $persoManager->getUnPersonnageById($idPerso);

        require("view/read-perso.php");
        break;

    case 'read-articles':
        require("modele/manager/articlesManager.php");
        $idArticle = filter_var($_GET['num'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $ArticleManager = new ArticlesManager($unPDO);
        $UnArticle = $ArticleManager->getUnArticleById($idArticle);
        //var_dump($UnArticle);
        require("view/read-articles.php");
        break;
        
    case 'read-tournoi':
        require("modele/manager/tournoiManager.php");
        $idTournoi = filter_var($_GET['num'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $tournoiManager = new TournoiManager($unPDO);
        $leTournoi = $tournoiManager->getUnTournoiById($idTournoi);
        //var_dump($leTournoi);
        require("view/read-tournoi.php");
        break;    


    default :
    require('view/indexView.php');
}
