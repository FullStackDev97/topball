<?php $title = 'delete-perso'; ?>



<?php ob_start(); ?>

<div class="container-fluid d-flex justify-content-center">
    <div class="card m-3" style="width: 20rem; ">
        <img src="./image/perso/<?= $lePerso->getImage();?>" style="max-width: 20rem;" class="card-img-top" alt="...">
        <form action="./?path=admin&action=traitement-delete-perso" method="post" class="d-flex flex-column p-3  border border-light rounded shadow-lg">
            <div class="form-group  m-1">
                <div class="row">
                    <div class="col"><input minlength="2" type="text" class="form-control" name="prenom" value="<?= $lePerso->getPrenom(); ?>" placeholder="nom" required="required"></div>
                    <div class="col"><input minlength="2" value="<?= $lePerso->getNom(); ?>" type="text" class="form-control" name="nom" placeholder="nom" required="required"></div>
                </div>
            </div>
            <div class="form-group m-1">
                <input minlength="6" value="<?= $lePerso->getIdPersonnage(); ?>" type="hidden" class="form-control" id="id" name="id" placeholder="id" required="required">
            </div>
            <div class="form-group m-1">
                <input minlength="6" value="<?= $lePerso->getPoste(); ?>" type="text" class="form-control" id="poste" name="poste" placeholder="poste" required="required">
            </div>
            <div class="form-group m-1">
                <input max="99" value="<?= $lePerso->getNotation(); ?>" type="number" class="form-control" id="notation" name="notation" placeholder="notation" required="required">
            </div>
            <div class="form-group m-1">
                <input type="text" value="<?= $lePerso->getRarete(); ?>" class="form-control" name="rarete" placeholder="rarete" required="required">
            </div>

            <div class="form-group m-1">
                <input type="date" value="<?= $lePerso->getAge(); ?>" class="form-control" id="age" name="age" required="required" placeholder="0000-00-00">
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