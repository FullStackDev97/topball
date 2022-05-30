<?php

$title="ajoutArticles";


ob_start();
?>

<div class="container">
    <h1></h1>
    <form action="" method="post">
        <div>
            <label for="">Titre:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div>
            <label for="">Contenu:</label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div>
            <label for="">Date d'ajout</label>
            <input type="date" name="" id="" class="form-control" accept="image/* ">
        </div>
        <div>
            <label for="image"></label>
            <input required type="file" name="image" id="" class="form-control">
        </div>
    </form>
</div>

<?php $content=ob_get_clean();                  

require('template.php')?>