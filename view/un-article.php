<?php $title = 'article'; ?>

<?php ob_start(); ?>




<!-- start section -->
<section class="big-section m-0 ">
    <div class="container border col-md-8 border-rounded shadow-lg ">
        <div class="row justify-content-center m-0">
            <img src="<?= $unArticle->getThumbnailArticle(); ?>" alt="image decrivant article" class=" rounded rounded-pill w-50 h-50 mt-1" alt="Responsive image">
            <div class="col-md-12 text-center ">
                <h3 class="alt-font text-extra-dark-gray font-weight-700 pt-5"><?= $unArticle->getTitreArticle(); ?></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bg-light-gray padding-40px-all sm-padding-30px-all last-paragraph-no-margin">
                    <?php foreach ($contenuArticle as $paragraphe) : ?>
                        <p><?= $paragraphe; ?></p>
                        <br>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-evenly">
            <div class="col-5 text-center dropdown mb-2  ">
                <a class="dropdown-toggle" href=""><i class="far  fa-4x fa-comments text-primary"></i></a>
                <div class="dropdown-menu mb-5" style="margin-top: -23px;" aria-labelledby="navbarDropdown">
                    <form class="dropdown-item" method="post" action="./?path=main&action=traitement-commentaire">
                        <label for="contenuCom">Tapez votre commentaire :</label>
                        <textarea class="form-control" name="contenuCom" id="contenuCom" cols="5" rows="5">

                        </textarea>
                        <input type="hidden" value="<?= $unArticle->getIdArticle(); ?>" class="form-control" name="idArticle" placeholder="idArticle" required="required">
                        <input type="hidden" value="<?= $_SESSION['id']; ?>" class="form-control" name="idJoueur" placeholder="idJoueur" required="required">
                        <button type="submit" class="btn btn-primary mt-1">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-5 text-center  mb-5">
                <a href=""><i class="fas  fa-4x fa-heart text-danger"></i></a>

            </div>
        </div>
        <!-- <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
        
    </aside> -->
    </div>
</section>
<!-- end section -->
<!-- start section -->

<!-- end section -->


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>