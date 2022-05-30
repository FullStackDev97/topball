<?php $title = 'create'; ?>


<?php ob_start(); ?>
<h1 class="text-center m-5">Create</h1>
<div class="container-fluid m-5 d-flex justify-content-center">
    
    <form action="./?path=admin&action=traitement-create-articles" method="post" class="d-flex flex-column p-3 mb-5 border border-light rounded shadow-lg">
        
        <?php var_dump($_SESSION); ?>
        <div class="form-group m-1">
            <input minlength="6"   type="text" class="form-control" id="titreArticle" name="titreArticle" placeholder="titre" required="required"  >
        </div>
        <div class="form-group m-1">
            <input minlength="6"   type="hidden" class="form-control" id="idAdmin" name="idAdmin" value="<?=$_SESSION['id'] ?>"   >
        </div>
        <div class="form-group m-1">
            <input minlength="6"   type="text" class="form-control" id="thumbnailArticle" name="thumbnailArticle" placeholder="nom-image"   >
        </div>
        <div class="form-group m-1">
            <textarea name="contenuArticle" class="form-control" id="contenuArticle" cols="30" rows="10">

            </textarea>
        </div>
        
        <div class="form-group m-1">
            <input type="date"  class="form-control" id="dateCreation" name="dateCreation" required="required" placeholder="0000-00-00" >
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