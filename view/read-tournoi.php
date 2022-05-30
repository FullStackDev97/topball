<?php $title = 'read-perso'; ?>



<?php ob_start(); ?>

<div class="container-fluid d-flex justify-content-center">
    <div class="card d-flex  m-3" style="width: 18rem;">
        
        <div class="card-body">
            <div class="row">
                <h5 class="card-title col"><?= $leTournoi->getNom(); ?></h5>
            </div>
            <p class="card-text">Debut: <?= $leTournoi->getDateDebut(); ?></p>
            <p class="card-text">Fin: <?= $leTournoi->getDateFin(); ?></p>
        </div>
    </div>
</div>

<div class="form-group m-1 align-self-center">
    <a href="./?path=admin&action=admin"><button type="button" class="btn btn-light border border-light shadow">Back</button></a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>