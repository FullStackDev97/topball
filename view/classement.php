<?php $title = 'classements'; ?>

<?php ob_start(); ?>


<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">won</th>
      <th scope="col">lost</th>
      <th scope="col">Tgames</th>
      <th scope="col">W%</th>
      <th scope="col">Pseudo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?=(getNbVictoire())[0][0]?></td>
      <td><?=(getNbDefaite())[0][0]?></td>
      <td><?=(getPartieTotalEquipe(1))[0][0]?></td>
      <td><?=(getPourcentageV(1))[0][0]?>%</td>
      <td><?= $leJoueur1->getPseudo(); ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>4</td>
      <td>6</td>
      <td>10</td>
      <td>40%</td>
      <td><?= $leJoueur2->getPseudo(); ?></td>
    </tr>
    <tr>
    <th scope="row">3</th>
    <td>2</td>
    <td>8</td>
    <td>10</td>
    <td>20%</td>
    <td><?= $leJoueur3->getPseudo(); ?></td>
    </tr>
    <tr>
    <?php
    /*foreach($desJoueurs as $leJoueur){
      echo("<tr>");
      echo("<td>".$leJoueur->getNom()."</td>");
      echo("<td>".$leJoueur->getPrenom()."</td>");
      echo("<td>".$leJoueur->getEmail()."</td>");
      echo("<td>".$leJoueur->getPseudo()."</td>");
      echo("<td>");
      echo("<a href='class='btn btn-info'>Modifier</a>" );
      echo("<a href='class='btn btn-info'>Supprimer</a>" );
      echo("</tr>");
    }*/
    
    ?>
  </tbody>
</table>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>