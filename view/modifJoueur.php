<?php $title = 'traitementFormJoueur'; ?>


<?php ob_start(); ?>
<h1 class="text-center">Modifier joueur</h1>
<div class="container-fluid d-flex justify-content-center">
    
    <form action="index.php/?path=main&action=traitementModifJoueur" method="post" class="d-flex flex-column p-3 mb-5 border border-light rounded shadow-lg">
        <div class="form-group  m-1">
            <div class="row">
                <div class="col"><input minlength="2"  type="text" class="form-control" name="prenom" value="<?= $leJoueur->getPrenom();?>" placeholder="nom" required="required"></div>
                <div class="col"><input minlength="2" value="<?= $leJoueur->getNom();?>" type="text" class="form-control" name="nom" placeholder="nom" required="required"></div>
            </div>
        </div>
        <div class="form-group m-1">
            <input minlength="6" value="<?= $leJoueur->getIdJoueur();?>"  type="hidden"  class="form-control" id="id" name="id" placeholder="id" required="required"  >
        </div>
        <div class="form-group m-1">
            <input minlength="6" value="<?= $leJoueur->getEmail();?>"  type="email" class="form-control" id="email" name="email" placeholder="email" required="required"  >
        </div>
        <div class="form-group m-1">
            <input max="99" value="<?= $leJoueur->getPseudo();?>"  type="text" class="form-control" id="Pseudo" name="Pseudo" placeholder="Pseudo" required="required">
        </div>
        <div class="form-group m-1">
            <input type="text" value="<?= $leJoueur->getImageProfil();?>" class="form-control" name="rarete" placeholder="rarete" required="required">
        </div>
        
        <div class="form-group m-1">
            <input type="date" value="<?= $leJoueur->getAge();?>" class="form-control" id="age" name="age" required="required" placeholder="0000-00-00" >
        </div>
        
        <div class="form-group m-1 align-self-center">
            <button type="submit" class="btn btn-primary btn-lg ">Valider</button>
        </div>


    </form>
    <script src="./public/js/veriform.js"></script>
    </div> 
    <?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
