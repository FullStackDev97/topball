<?php $title = 'nouveaute'; ?>

<?php ob_start(); ?>




<!-- start section -->
<section class="big-section bg-light-gray border-top border-color-medium-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center margin-seven-bottom">
                        <h6 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">POSTS</h6>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- start services item -->
                    <?php foreach ($lesarticles as $unArticle) : ?>
                    <div class="col-12 col-lg-5 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                        <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                            <div class="feature-box-content">
                                <h6 class="alt-font font-weight-800 d-block text-extra-dark-gray"><?= $unArticle->getTitreArticle(); ?></h6>
                                <p class="text-small font-weight-300  alt-font d-block text-extra-dark-gray"><?= substr($unArticle->getContenuArticle(),0,100) ; ?>....</p>
                                <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                                <a class="text-small font-weight-500 text-uppercase alt-font d-block text-extra-dark-gray" href="index.php?path=main&action=un-article&num=<?=$unArticle->getIdArticle(); ?>">Read more<i class="feather icon-feather-arrow-right icon-extra-small float-end"></i></a>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <?php endforeach ; ?>
                </div>
            </div>
        </section>
        <!-- end section -->

<?php $content = ob_get_clean(); ?>

        <?php require('template.php'); ?>