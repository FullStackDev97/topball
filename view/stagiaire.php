<?php $title = 'stagiaire'; ?>

<?php ob_start(); ?>
<div class="container-fluid " id="bodybis">

<?php
  foreach($lesStagiares as $unStagiare){
    echo ($unStagiare["nom"]." ".$unStagiare["prenom"]."<br>");
  }
?>
  <img src="./image/kyrie.jpg" alt="" id="homeImage">
  <div class="d-grid gap-2 col-6 mx-auto m-10 d-block ">
    <button class="btn btn-primary  mt-5 buttonplace " type="button"><a href="index.php?path=main&action=connexion" class="text-light">Se Connecter</a></button>
    <button class="btn btn-primary  mb-5 buttonplace " type="button"><a href="index.php?path=main&action=inscription" class="text-light">S'inscrire</a></button>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>