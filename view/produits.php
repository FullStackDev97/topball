<?php $title = 'produits'; ?>

<?php ob_start(); ?>


<section>
  <h3 class="text-center">Packs</h3>
  <div class="container-fluid d-flex justify-content-around m-5">

    <?php foreach ($lespacks as $unpack) : ?>


      <!-- Card -->
      <div class="card mt-5" style="width: 12rem;">

        <div class="view zoom overlay">
          <img class="img-fluid w-100" src="./image/formules/<?= $unpack->getImage(); ?>" alt="Sample">


        </div>

        <div class="card-body text-center">

          <h5><?= $unpack->getNom(); ?></h5>
          <p class="small text-muted text-uppercase mb-1">Pack</p>

          <hr>
          <h6 class="mb-2">
            <span class="text-danger mr-1">$<?= $unpack->getPrix(); ?></span>

          </h6>

          <button type="button" class="btn btn-primary btn-sm mr-1 mb-1">
            <i class="fas fa-shopping-cart pr-2"></i>Add to cart
          </button>
          <button type="button" class="btn btn-light btn-sm mr-1 mb-1">
            <i class="fas fa-info-circle pr-2"></i>Details
          </button>


        </div>

      </div>

      <!-- Card -->

    <?php endforeach; ?>

  </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>