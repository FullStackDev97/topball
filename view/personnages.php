<?php $title = 'personnages'; ?>

<?php ob_start(); ?>



<div class="table-responsive  m-5 p-2 border rounded">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row mt-5">
                <div class="col-sm-8 ">
                    <h2>Personnages</h2>
                </div>
                <div class="col-sm-4">
                    <div class="search-box mb-2 d-flex justify-content-end ">
                    <a href="./?path=admin&action=create-perso" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="m-3 fa fa-2x fa-plus border border-primary rounded"> </i></a>
                    </div>
                </div>
            </div>
            
        </div>
        <table class="table table-striped table-hover table-bordered ">
            <thead>
                <tr>
                    <th class='p-3'>idPersonnage</th>
                    <th>Nom <i class="fa fa-sort"></i></th>
                    <th>Prenom</th>
                    <th>Poste <i class="fa fa-sort"></i></th>
                    <th>Age</th>
                    <th>Notation <i class="fa fa-sort"></i></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($lesPersonnages as $unpersonnage) {
                    echo ("<tr>");
                    echo ("<td class='m-3' >" . $unpersonnage->getIdPerso() . "</td>");
                    echo ("<td>" . $unpersonnage->getNom() . "</td>");
                    echo ("<td>" . $unpersonnage->getPrenom() . "</td>");
                    echo ("<td>" . $unpersonnage->getPoste() . "</td>");
                    echo ("<td>" . $unpersonnage->getAge() . "</td>");
                    echo ("<td>" . $unpersonnage->getNotation() . "</td>");
                    echo ('<td>
                        <a href="./?path=admin&action=read-perso&num=' . $unpersonnage->getIdPerso() . '" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="far fa-eye"></i></a>
                        <a href="./?path=admin&action=update-perso&num=' . $unpersonnage->getIdPerso() . '" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="./?path=admin&action=delete-perso&num=' . $unpersonnage->getIdPerso() . '" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
                        </td>');
                    echo ('</tr>');
                }
                ?>
            </tbody>
        </table>

    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>