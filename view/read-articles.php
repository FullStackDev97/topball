<?php $title = 'read-articles'; ?>

<?php ob_start(); ?>


<section class="blog-right-side-bar pt-0">


    <div class="blog-text d-inline-block w-100">

        <a href="blog-masonry.html" class="text-white">2021-10-08 15:15:10</a>

        <span class="margin-5px-lr"></span> <a href="blog-masonry.html" class="text-white">Web Design</a>
        <h6 class="text-center alt-font font-weight-500"><a href="blog-post-layout-01.html" class="text-extra-dark-gray text-fast-blue-hover"><?= $UnArticle->getTitreArticle(); ?></a></h6><a href="blog-post-layout-01.html" class="text-extra-dark-gray text-fast-blue-hover">
            <p>
                <?= $UnArticle->getContenuArticle(); ?>
            </p>
        </a>
        <div class="container-fluid d-flex justify-content-center"><a href="blog-post-layout-01.html" class="text-extra-dark-gray text-fast-blue-hover">
            </a><a href=" blog-post-layout-01.html" class="btn btn-small btn-transparent-dark-gray btn-round-edge btn-slide-up-bg margin-10px-top">Continue Reading <span class="bg-extra-dark-gray"></span></a>
        </div>

    </div>
</section>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>