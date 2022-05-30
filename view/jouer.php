<?php $title = 'jouer'; ?>

<?php ob_start(); ?>

<div class="d-flex flex-column  container-fluid border border-rounded">

    <div class="player info row">
        <div class="card m-2" style="width: 14rem;">
            <img src="./image/AvatarMaker.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $leJoueur1->getPseudo(); ?></h5>
            </div>
        </div>

        <div class="card m-2 ms-auto" style="width: 14rem;">
            <img src="./image/AvatarMaker.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $leJoueur2->getPseudo(); ?></h5>
            </div>
        </div>
    </div>

    <hgroup class="text-center m-2">
        <h3> <?= $uneEquipe1->getNom(); ?> vs <?= $uneEquipe2->getNom(); ?></h3>
        <h6>point equpe1 - point equpe2 </h6>
    </hgroup>


   








</div>






























<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>