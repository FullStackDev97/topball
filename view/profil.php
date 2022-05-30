<?php $title = 'profil'; ?>

<?php ob_start(); ?>

<div class="d-flex  flex-column container border border-rounded mt-5">

    <div class="d-flex flex-row m-5 ">
        <div class="image rounded">
            <img src="./image/<?= $unJoueur->getImageProfil(); ?>" class="img-fluid rounded-circle" style="width:10rem; height:10rem;" alt="...">
            <h4 class="m-1 me-2 text-center"><?= strtoupper($unJoueur->getPseudo()) ?></h4>
        </div>
        
    </div>
</div>

</div>



<h3 class="text-center"><?= $uneEquipe->getNom(); ?></h3>

<div class="d-flex justify-content-center container-fluid m-2">


    <div class="m-2 w-50 border border-dark border-2 rounded  ">
        <h6 class="text-center mt-2">squad :</h6>
        <div class="d-flex justify-content-evenly">
            <?php foreach ($personnagesIdequipe as $unpersonnage) : ?>

                <div style="width:5rem; height:5rem;" class="card m-2">
                    <img src="./image/perso/<?= $unpersonnage->getImage() ?>" alt="">
                    <div class="card-body">

                    </div>
                </div>


            <?php endforeach; ?>
        </div>
    </div>
</div>

</div>
















<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>