<?php


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;



if(!isset($_GET['action']))
{
    $action="home";
}
else{
    $action=$_GET['action'];
}

switch ($action){
    case "home":
        
        require("modele/manager/joueurManager.php");
        $pseudo=filter_var($_POST['pseudo'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mdp=filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mdp=hash('sha256',$mdp);
        $unPDO=etablirCo();
        $joueursManager= new joueurManager($unPDO);
        $joueur=$joueursManager->getUnJoueurByPseudoAndPassword($pseudo,$mdp);
        if ($joueur==false) {
            $_SESSION['error']="Tentative de connexion échouer";
            header("location:index.php?path=main&action=login");
            die;
        }else {
            session_unset();
            $_SESSION['pseudo']=$joueur->getPseudo();
            $_SESSION['id']=$joueur->getIdJoueur();
            $_SESSION['image']=$joueur->getImageProfil();
            header("location:index.php");
        }
        break;
        //$lesJoueurs= (getAllJoueur());
        //$lesPersonnages= (getAllPersonnage());
        //$unPDO=etablirCo();
        //$joueursManager=new joueurManager($unPDO);
        //$unJoueur= $joueursManager->getUnJoueurById(1);
        /*echo '<pre>';
        print_r($unJoueur);
        echo  '</pre>';*/
        require('view/indexView.php');
    break;

    case "deconnexion":
        
        //require('view/connexion.php');
        if (isset($_SESSION['pseudo'])) {
            session_unset();
            session_destroy();
            header("location:index.php?path=main&action=home");
        }else {
            require('view/indexView.php');
        }
    break;

    case "nouveaute":
        //require("modele/bdd.php");
        require("modele/manager/adminManager.php");
        require("modele/manager/articlesManager.php");
        $unPDO = etablirCo();
        $articlesManager=new ArticlesManager($unPDO);
        $lesarticles= $articlesManager->getAllArticlesAndAuthor();
        //$unArticle= $articlesManager->
        //var_dump($lesarticles);
        require('view/nouveaute.php');
        $ajd=getdate();
        var_dump($ajd);
    break;

    case 'un-article':
        require("modele/manager/articlesManager.php");
        $idarticles=filter_var($_GET['num'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $unPDO = etablirCo();
        $articlesManager=new ArticlesManager($unPDO);
        $unArticle= $articlesManager->getUnArticleById($idarticles);
        $contenuArticle = $unArticle->getContenuArticle();
        $contenuArticle = str_split($contenuArticle,306);
        require('view/un-article.php');
        //var_dump($_SESSION);
        break;

    case 'personnages':
        
        require("modele/manager/personnageManager.php");
        $unPDO = etablirCo();
        $persoManager=new PersonnageManager($unPDO);
        $lesPersonnages= $persoManager->getAllPersonnage();
        require('view/personnages.php');
    break;

    

    case 'joueurs':
        
        require("modele/manager/joueurManager.php");
        $unPDO = etablirCo();
        $joueurManager=new JoueurManager($unPDO);
        $lesJoueurs= $joueurManager->getAllJoueur();
        require('view/joueur.php');
    break;

    case "produits":
        
        require("modele/manager/packManager.php");
        //require("modele/classes/packs/pack_class.php");
        $unPDO = etablirCo();
        $packManager =new PackManager($unPDO);
        $lespacks= $packManager->getAllPacks();
       
        //var_dump($pack1);
        require('view/produits.php');
    break;

    case "inscription":
        
        require('view/inscription.php');
    break;

    case 'jouer':
        
        require("modele/manager/joueurManager.php");
        require("modele/manager/equipeManager.php");
        $unPDO=etablirCo();
        $joueursManager=new joueurManager($unPDO);
        $leJoueur1= $joueursManager->getUnJoueurById(1);
        $leJoueur2= $joueursManager->getUnJoueurById(2);
        $equipeManager=new equipeManager($unPDO);
        $uneEquipe1=$equipeManager->getUneEquipeById(1);
        $uneEquipe2=$equipeManager->getUneEquipeById(2);
        require('view/jouer.php');
        break;

    case "classement":
        
        require("modele/manager/joueurManager.php");
        //$idJoueur=$_GET['num'];
        //$lesJoueurs= (getAllJoueur());
        //$idJoueur= "";
        $unPDO=etablirCo();
        $joueursManager=new joueurManager($unPDO);
        //$unJoueur= $joueursManager->getUnJoueurById(1);
        $desJoueurs=$joueursManager->getAllJoueur();
        $leJoueur1=$joueursManager->getUnJoueurById(1);
        $leJoueur2=$joueursManager->getUnJoueurById(2);
        $leJoueur3=$joueursManager->getUnJoueurById(3);
        //$unJoueur= (getJoueurById($idJoueur));
        //var_dump($joueursManager->getUnJoueurById(1));
        require('view/classement.php');
        
    break;

    case 'traitement-inscription':
        require("modele/manager/joueurManager.php");
        $unPDO=etablirCo();
        $joueursManager=new joueurManager($unPDO);

        //var_dump($_POST);
        $prenom=filter_var($_POST['prenom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $nom=filter_var($_POST['nom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email=filter_var($_POST['email'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $age=filter_var($_POST['age'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $pseudo=filter_var($_POST['pseudo'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password=filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password= hash('sha256',$password);

        //var_dump($password);
        //@todo verification des données
        $nouveauJoueur = $joueursManager->addUnJoueur($nom,$prenom,$email,$age,$pseudo,$password);
        //header("Location:localhost/templateProject/");
        break;


    case 'handleCo':
        require("view/menu.php");
        require("modele/manager/joueurManager.php");
        require("modele/manager/adminManager.php");
        $pseudo=filter_var($_POST['pseudo'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mdp=filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mdp=hash('sha256',$mdp);
        $unPDO=etablirCo();
        $adminManager= new AdminManager($unPDO);
        $admin=$adminManager->getUnAdminByPseudoAndPassword($pseudo,$mdp);
        $joueursManager= new joueurManager($unPDO);
        $joueur=$joueursManager->getUnJoueurByPseudoAndPassword($pseudo,$mdp);
        //var_dump($joueur);
        //var_dump($admin);
        if ($joueur == false && $admin == false) {
            $_SESSION['pseudo'] = 'visiteur';
            $_SESSION['role'] = 'visiteur';
        }elseif ($joueur!=false) {
            session_unset();
            $_SESSION['pseudo']=$joueur->getPseudo();
            $_SESSION['id']=$joueur->getIdJoueur();
            $_SESSION['image']=$joueur->getImageProfil();
            $_SESSION['role']= 'joueur';
            header("location:index.php");
       
        }elseif ($admin != false) {
            session_unset();
            $_SESSION['pseudo'] = $admin->getPseudo();
            $_SESSION['id'] = $admin->getIdAdmin();
            //$_SESSION['image']=$admin->getImageProfil();
            $_SESSION['role'] = 'admin';
            header("location:index.php?path=admin&action=admin");
        }else{
            $_SESSION['error']="Tentative de connexion échouer";
            header("location:index.php?path=main&action=login");
            die;
        }
        //var_dump($_SESSION);
        break;

    case "profil":
        $idPerso = filter_var($_GET['num'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        require("modele/manager/joueurManager.php");
        require("modele/manager/personnageManager.php");
        require("modele/manager/equipeManager.php");
        $unPDO=etablirCo();
        $joueursManager=new joueurManager($unPDO);
        $unJoueur= $joueursManager->getUnJoueurById($idPerso);
        $equipeManager=new equipeManager($unPDO);
        $uneEquipe=$equipeManager->getUneEquipeByIdjoueur($idPerso);

        $personnageManager= new PersonnageManager($unPDO);
        $personnagesIdequipe=$personnageManager->getPersonnageParEquipe($uneEquipe->getIdEquipe());
        /*echo '<pre>';
        print_r($personnagesIdequipe);
        echo  '</pre>';*/
        require('view/profil.php');
    break;

    case "traitement-commentaire" :
        require("modele/manager/comManager.php");
        $unPDO=etablirCo();

        $contenuCom=filter_var($_POST['contenuCom'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dateCom=date('d-m-y h:i');
        $idJoueur=filter_var($_POST['idJoueur'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $idArticle=filter_var($_POST['idArticle'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $comManager= new CommentaireManager($unPDO);
        $newCom = $comManager->addUnCom($contenuCom,$dateCom,$idJoueur,$idArticle);
        header("location:index.php?path=main&action=un-article&num=$idArticle");
        //var_dump($newCom);
    break;

    // case 'traitement-email':
    //     require './public/PHPMailer-master/src/Exception.php';
    //     require './public/PHPMailer-master/src/PHPMailer.php';
    //     require './public/PHPMailer-master/src/SMTP.php';
    //     //ini_set('SMTP', 'smtp.gmail.com');
    //     //ini_set('smtp_port', 587);
    //     // var_dump($_POST);
    //     $to= 'kidkush742@gmail.com';
    //     $sender_email= filter_var($_POST['email'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     $subject= filter_var($_POST['sujet'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     $message= filter_var($_POST['message'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     // $headers = array(
    //     //     'From' => $sender_email,
    //     //     'Reply-To' => $sender_email,
    //     //     'X-Mailer' => 'PHP/' . phpversion()
    //     // );
        
        

    //     $mail = new PHPmailer();
    //     $mail->IsSMTP(true);

    //     //$mail->SMTPDebug = 2;
    //     $mail->Host = 'smtp.yahoo.com';
    //     $mail->Port = 465;
    //     $mail->SMTPSecure = 'tls';
    //      //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //     $mail->SMTPAuth = true;
    //     $mail->Username = "emiliosensuavictor@yahoo.com"; //votre gmail
    //     $mail->Password = "Paloma201120"; // mdp gmail
    //     $mail->SMTPSecure = 'ssl';
    //     $mail->setFrom('emiliosensuavictor@yahoo.com', 'Formulaire de contact'); // votre gmail
    //     $mail->AddAddress($sender_email);

    //     $mail->IsHTML(true);
    //     $mail->Subject = $subject;
    //     $mail->Body = $message;
    //     $mail->CharSet = "UTF-8";
    //     if (!$mail->Send()) { //Teste le return code de la fonction
    //         echo $mail->ErrorInfo; //Affiche le message d'erreur 
    //     } else {
    //         echo 'Mail envoyé avec succès';
    //     }
    //     $mail->SmtpClose();
    //     unset($mail);
    //     break;
    
    
    case "contact" :
        
        require('view/contact.php');
    break;

    default :
    
    require('view/indexView.php');
}
