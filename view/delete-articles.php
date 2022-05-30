<?php $title = 'delete-perso'; ?>



<?php ob_start(); ?>

<div class="container-fluid d-flex justify-content-center">
    <div class="card m-3" style="width: 50rem; ">
        
        <form action="./?path=admin&action=traitement-delete-articles" method="post" class="d-flex flex-column p-3  border border-light rounded shadow-lg">
            
            <div class="form-group m-1">
                <label for="titreArticle" >Titre Article:</label>
                <input minlength="6" value="<?= $UnArticles->getTitreArticle(); ?>"  class="form-control" id="titreArticle" name="titreArticle" placeholder="id" required="required">
            </div>
            <div class="form-group m-1">
            <label for="contenuArticle" >Contenu Article:</label>
                <textarea name="contenuArticle" id="contenuArticle" cols="30" rows="10"><?= $UnArticles->getContenuArticle(); ?></textarea>
            </div>
            <div class="form-group m-1">
                <input minlength="6" value="<?= $UnArticles->getIdArticle(); ?>" type="hidden" class="form-control" id="idArticle" name="idArticle" placeholder="id" required="required">
            </div>

            <div class="form-group m-1 align-self-center">
                <button type="submit" class="btn btn-danger btn-lg ">Supprimer</button>
            </div>

        </form>

        
    </div>

    <div class="form-group m-1 align-self-center">
                <a href="./?path=admin&action=admin"><button type="button" class="btn btn-light border border-light shadow">Back</button></a>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>