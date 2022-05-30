<?php 

require("./modele/classes/commentaires/commentaire_class.php");


class CommentaireManager {
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



    function getUnComByIdJoueur($id){
    
        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM commentaires WHERE idJoueur=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Commentaires");
            $resultat = ($sql->fetch());
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }


    function getAllComByidArticle($id){
    
        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM commentaires WHERE idArticle=:uneid");
            $sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Commentaires");
            $resultat = ($sql->fetch());
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    function getAllCom(){
    
        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM commentaires ORDER BY  idCommentaire");
            //$sql->bindParam(":uneid",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Commentaires");
            $resultat = ($sql->fetch());
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }


    public function addUnCom($contenuCom,$dateCom,$idJoueur,$idArticle){
    
        try {
            
            $connex=$this->lePDO;
            $sql =$connex->prepare("INSERT INTO commentaires (contenuCom,dateCom,idJoueur,idArticle) VALUES (:contenuCom,:dateCom,:idJoueur,:idArticle)");
            $sql->bindParam(":contenuCom",$contenuCom);
            $sql->bindParam(":dateCom",$dateCom);
            $sql->bindParam(":idJoueur",$idJoueur);
            $sql->bindParam(":idArticle",$idArticle);
            $sql->execute();
            $resultat = ($sql->fetchAll(PDO::FETCH_CLASS,"Commentaires"));
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }


}






































?>