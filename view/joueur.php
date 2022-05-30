<?php $title = 'joueurs'; ?>

<?php ob_start(); ?>

<div class="table-responsive  m-5 p-2 border rounded">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row mt-5">
                    <div class="col-sm-8"><h2>Joueurs</h2></div>
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
                        <th>idJoueur</th>
                        <th>Nom <i class="fa fa-sort"></i></th>
                        <th>Prenom</th>
                        <th>Pseudo <i class="fa fa-sort"></i></th>
                        <th>Age</th>
                        <th>Actions <i class="fa fa-sort"></i></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($lesJoueurs as $unjoueur) {
                        echo ("<tr>");
                        echo ("<td>".$unjoueur->getIdJoueur()."</td>");
                        echo("<td>".$unjoueur->getNom()."</td>");
                        echo("<td>".$unjoueur->getPrenom()."</td>");
                        echo("<td>".$unjoueur->getPseudo()."</td>");
                        echo("<td>".$unjoueur->getAge()."</td>");
                        echo('<td>
                        <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="far fa-eye"></i></a>
                        <a href="./?path=admin&action=traitementFormJoueur&num=' . $unjoueur->getIdJoueur(). '" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
                    </td>');
                        echo('</tr>');
                    };
                    ?>
                </tbody>
            </table>
            
        </div>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>