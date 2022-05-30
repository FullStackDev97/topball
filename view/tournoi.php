<?php $title = 'personnages'; ?>

<?php ob_start(); ?>




<div class="table-responsive  m-5 p-2 border rounded">
<a href="./?path=admin&action=create-tournoi" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="m-3 fa fa-2x fa-plus border border-primary rounded"></i></a>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row mt-5">
            <div class="m-5  col-sm-8">
                    <h2 class="text-center">Tournois</h2>
                </div>
                
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered ">
            <thead>
                <tr>
                    <th>idTournoi</th>
                    <th>Nom <i class="fa fa-sort"></i></th>
                    <th>Date debut</th>
                    <th>Date fin <i class="fa fa-sort"></i></th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($lesTournoi as $unTournoi) {
                    echo ("<tr>");
                    echo ("<td>" . $unTournoi->getIdTournoi() . "</td>");
                    echo ("<td>" . $unTournoi->getNom() . "</td>");
                    echo ("<td>" . $unTournoi->getDateDebut() . "</td>");
                    echo ("<td>" . $unTournoi->getDateFin() . "</td>");
                    echo ('<td>
                        <a href="./?path=admin&action=read-tournoi&num=' . $unTournoi->getIdTournoi() . '" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="far fa-eye"></i></a>
                        <a href="./?path=admin&action=update-tournoi&num=' . $unTournoi->getIdTournoi() . '" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="./?path=admin&action=delete-tournoi&num=' . $unTournoi->getIdTournoi() . '" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
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