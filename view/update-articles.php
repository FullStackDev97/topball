<?php $title = 'update-article'; ?>

<?php ob_start(); ?>

<h1 class="text-center">Modifier</h1>
<div class="container-fluid d-flex justify-content-center">
    
    <form action="./?path=admin&action=traitement-update-perso" method="post" class="d-flex flex-column p-3 mb-5 border border-light rounded shadow-lg">
        
        <div class="form-group m-1">
            <input type="text" value="<?= $unArticles->getTitreArticle();?>"   class="form-control" id="id" name="id" placeholder="id" required="required"  >
        </div>
        <div class="form-group m-1">
            <textarea name="contenuArticle" id="contenuArticle" cols="30" rows="10">
                <?=$unArticles->getContenuArticle();  ?>
            </textarea>
        </div>
        
        <div class="form-group m-1">
            <input  type="hidden"  value="<?= $unArticles->getIdArticle();?>" class="form-control" name="idArticle" placeholder="idArticle" required="required">
        </div>
        
        <div class="form-group m-1">
            <input type="date" value="<?= $unArticles->getDateCreation();?>" class="form-control" id="dateCreation" name="dateCreation" required="required" placeholder="0000-00-00" >
        </div>
        
        <div class="form-group m-1 align-self-center">
            <button type="submit" class="btn btn-primary btn-lg ">Valider</button>
        </div>


    </form>

    <div class="form-group m-1 align-self-center">
                <a href="./?path=admin&action=admin"><button type="button" class="btn btn-light border border-light shadow">Back</button></a>
    </div>

    <script src="./public/js/veriform.js"></script>
    </div> 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>