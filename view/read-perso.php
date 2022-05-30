<?php $title = 'read-perso'; ?>



<?php ob_start(); ?>

<div class="container-fluid d-flex justify-content-center">
    <div class="card d-flex  m-3" style="width: 18rem;">
        <img src="./image/perso/<?= $lePerso->getImage(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="row">
                <h5 class="card-title col"><?= $lePerso->getPrenom(); ?></h5>
                <h5 class="card-title col"><?= $lePerso->getNom(); ?></h5>
            </div>
            <p class="card-text">Poste: <?= $lePerso->getPoste(); ?></p>
            <p class="card-text">Née: <?= $lePerso->getAge(); ?></p>
            <p class="card-text">Note: <?= $lePerso->getNotation(); ?></p>
            <p class="card-text">Rarete: <?= $lePerso->getRarete(); ?></p>
        </div>
    </div>
</div>

<div class="form-group m-1 align-self-center">
    <a href="./?path=main&action=personnages"><button type="button" class="btn btn-light border border-light shadow">Back</button></a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>