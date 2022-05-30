<?php $title = 'articles'; ?>

<?php ob_start(); ?>


<div class="table-responsive  m-2 p-2 border rounded">
    
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Articles</h2>
                </div>
                <div class="col-sm-4">
                    <div class="search-box">
                        <input type="text" class="form-control" placeholder="Search…">
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered ">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu <i class="fa fa-sort"></i></th>
                    <th>Posté le</th>
                    <th>Auteur <i class="fa fa-sort"></i></th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($lesarticles as $unarticle) {
                    echo ("<tr>");
                    echo ("<td>" . $unarticle->getTitreArticle() . "</td>");
                    echo ("<td>" . $unarticle->getContenuArticle() . "</td>");
                    echo ("<td>" . $unarticle->getDateCreation() . "</td>");
                    echo ("<td>" . $unarticle->getNom() . " " . $unarticle->getPrenom() . "</td>");
                    echo ('<td>
                        <a href="./?path=admin&action=read-articles&num=' . $unarticle->getIdArticle() . '" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="far fa-eye"></i></a>
                        <a href="./?path=admin&action=update-articles&num=' . $unarticle->getIdArticle() . '" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="./?path=admin&action=delete-articles&num=' . $unarticle->getIdArticle() . ' class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
                    </td>');
                    echo ('</tr>');
                };
                ?>

            </tbody>
        </table>
        <a href="./?path=admin&action=create-articles" class="view mt-5" title="" data-toggle="tooltip" data-original-title="View"><i class="m-3 fa fa-2x fa-plus border border-primary rounded"></i></a>
    </div>
</div>



















<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>