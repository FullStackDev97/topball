<?php 


require("./modele/classes/articles/articles_class.php");
//require('./modele/classes/admin/admin_class.php');

class ArticlesManager {

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




    function getAllArticles(){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM articles ORDER BY idArticle");
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Articles"));
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getAllArticlesAndAuthor(){

        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM `articles` NATURAL JOIN `admin` ORDER BY idAdmin");
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Articles"));
            $resultat1 = ($sql->fetchAll(PDO::FETCH_CLASS,"Admin"));
            return $resultat;
            return $resultat1;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
    
    
    function getUnArticleById($id){
    
        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM articles WHERE idArticle=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Articles");
            $resultat = ($sql->fetch());
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
    
    function supprimeUnArticlesById($id)
    {
    
        try {
    
            $connex = $this->lePDO;
            //$connex->beginTransaction();
            //$sql = $connex->prepare("DELETE FROM equipe_personnage WHERE idPersonnage=:uneid ");
            //$sql->bindParam(":uneid", $id);
            //$sql->execute();
            $sql2 = $connex->prepare("DELETE FROM articles WHERE idArticle=:uneid");
            $sql2->bindParam(":uneid", $id);
            $sql2->execute();
            //$connex->commit();            
            //$sql->setFetchMode(PDO::FETCH_CLASS, "Personnages");
            //$resultat = ($sql->fetch());
            //return $resultat;
        } catch (PDOException $error) {
            //$connex->rollBack();
            echo $error->getMessage();
        }
    }
    
    
    public function updateUnArticles($titreArticle,$contenuArticle,$dateCreation ){
    
        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("UPDATE articles set titreArticle=:titreArticle,contenuArticle=:contenuArticle,dateCreation=:dateCreation where idArticles=:id");
            $sql->bindParam(":titreArticle",$titreArticle);
            $sql->bindParam(":contenuArticle",$contenuArticle);
            $sql->bindParam(":dateCreation",$dateCreation);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Articles"));
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
    
    public function addUnArticles($titreArticle,$contenuArticle,$dateCreation,$thumbnailArticle,$idAdmin){
    
        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("INSERT INTO articles (titreArticle,contenuArticle,dateCreation,thumbnailArticle,idAdmin) VALUES (:titreArticle,:contenuArticle,:dateCreation,:thumbnailArticle,:idAdmin)");
            $sql->bindParam(":titreArticle",$titreArticle);
            $sql->bindParam(":contenuArticle",$contenuArticle);
            $sql->bindParam(":dateCreation",$dateCreation);
            $sql->bindParam(":thumbnailArticle",$thumbnailArticle);
            $sql->bindParam(":idAdmin",$idAdmin);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Articles"));
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    
}








?>