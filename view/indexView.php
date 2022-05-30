<?php $title = 'Topball'; ?>

<?php ob_start(); ?>
<div class="container-fluid d-flex align-items-start pt-5  parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background:url('./image/header.jpg');background-size: cover;height:100vh;">


    <div class="container">
        <section class="bg-transparent">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">
                        <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1px">Topball league</h1>
                        <span class="d-inline-block  alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Become the best</span>

                        <?php if (isset($_SESSION['pseudo'])) : ?>




                            <div class="d-grid gap-2 col-5 mx-auto m-10 d-block ">
                                <button class="btn btn-danger shadow-lg rounded-pill mt-5 " type="button"><a href="index.php?path=main&action=deconnexion" class="text-light">Se Déconnecter</a></button>
                            </div>

                        <?php else : ?>

                            <div class=" d-grid gap-2 col-5 mx-auto ">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#connexion" name="connexion" class="btn  btn-outline-light bg-transparent rounded-pill ">Login</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#inscription" name="inscription" class="btn  btn-outline-light bg-transparent rounded-pill ">Sign up</button>
                            </div>

                            <?php include "login_vue.php" ?>

                            <?php include "subscribe_vue.php" ?>



                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>



</div>



</div>







</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>