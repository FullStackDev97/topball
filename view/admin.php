<?php $title = 'admin'; ?>

<?php ob_start(); ?>
<div class="container-fluid  mt-5">
    <section class="wow animate__fadeIn bg-light-gray padding-50px-tb sm-padding-30px-tb page-title-small">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center margin-six-bottom">
                    <h6 class="alt-font text-extra-dark-gray font-weight-600">DASHBOARD</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- start section -->
    <section class="big-section wow animate__fadeIn">
        <div class="container-fluid ">
            <div class="row row-cols-1 d-flex justify-content-evenly row-cols-lg-4 row-cols-sm-2">
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn">
                    <a href="index.php?path=admin&action=articles">
                        <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                            <div class="feature-box-icon">
                                <i class="fas fa-newspaper icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Articles</span>
                                <p class="text-dark">Lorem ipsum is simply dummy text the printing typesetting</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn">
                    <a href="index.php?path=admin&action=tournoi">
                        <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                            <div class="feature-box-icon">
                                <i class="fas fa-list-ol
 icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom
"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Tournois</span>
                                <p class="text-dark">Lorem ipsum is simply dummy text the printing typesetting</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn">
                    <a href="index.php?path=admin&action=personnages">
                        <div class="feature-box padding-1-half-rem-all sm-padding-2-rem-tb xs-padding-4-rem-lr md-margin-15px-bottom">
                            <div class="feature-box-icon">
                                <i class="fas fa-user  icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Personnages</span>
                                <p class="text-dark">Lorem ipsum is simply dummy text the printing typesetting</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end feature box item -->

            </div>
        </div>
    </section>
    <!-- end section -->
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>