<?php $title = 'error'; ?>

<?php ob_start(); ?>
<div class="container-fluid text-center m-5">
<h1>404: Page introuvable</h1>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>