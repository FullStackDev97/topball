<?php $title = 'delete-perso'; ?>



<?php ob_start(); ?>

<div class="container-fluid d-flex justify-content-center">
    <div class="card m-3" style="width: 20rem; ">
       
        <form action="./?path=admin&action=traitement-delete-tournois" method="post" class="d-flex flex-column p-3  border border-light rounded shadow-lg">
            
            <div class="form-group m-1">
                <input minlength="6" value="<?= $Untournoi->getIdTournoi(); ?>" type="hidden" class="form-control" id="id" name="id" placeholder="id" required="required">
            </div>
            <div class="form-group m-1">
                <input minlength="2" value="<?= $Untournoi->getNom(); ?>" type="text" class="form-control" name="nom" placeholder="nom" required="required">
            </div>
            <div class="form-group m-1">
                <input  value="<?= $Untournoi->getDateDebut(); ?>" type="date" class="form-control" id="dateDebut" name="dateDebut" placeholder="dateDebut" required="required">
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