<?php $title = 'update-tournoi'; ?>


<?php ob_start(); ?>
<h1 class="text-center">Modifier</h1>
<div class="container-fluid d-flex justify-content-center">
    
    <form action="./?path=admin&action=traitement-update-tournoi" method="post" class="d-flex flex-column p-3 mb-5 border border-light rounded shadow-lg">
        
        <div class="form-group m-1">
            <input  value="<?= $leTournoi->getIdTournoi();?>"  type="hidden"  class="form-control" id="id" name="id" placeholder="id" required="required"  >
        </div>
        <div class="form-group m-1">
            <input minlength="6" value="<?= $leTournoi->getNom();?>"  type="text" class="form-control" id="nom" name="nom" placeholder="nom" required="required"  >
        </div>
        <div class="form-group m-1">
            <input  value="<?= $leTournoi->getDateDebut();?>"  type="date" class="form-control" id="dateDebut" name="dateDebut" placeholder="dateDebut" required="required">
        </div>
        <div class="form-group m-1">
            <input type="date" value="<?= $leTournoi->getDateFin();?>" class="form-control" name="dateFin" placeholder="dateFin" required="required">
        </div>

        <!--<div class="form-group m-1">
            <input type="number" value="" class="form-control" name="idDivision" placeholder="idDivision" required="required">
        </div>-->
        
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