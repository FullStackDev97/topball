<nav class="navbar navbar-expand-lg fixed-top p-0 mb-5  bg-dark  header-reverse-scroll  ">
  <div class="container-fluid  " id="menu">
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand " href="index.php?path=main&action=home"><img style="width:2rem; height:2rem;" src="./image/TOP BALL.png" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto  ">
        <li class="nav-item ">
          <a class="nav-link text-white active " aria-current="page" href="index.php?path=main&action=home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?path=main&action=nouveaute">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?path=main&action=produits">PRODUCTS</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?path=main&action=contact">CONTACT</a>
        </li>

        <?php if (!isset($_SESSION['role'])) {
          session_unset();
          echo ('');
        } elseif ($_SESSION['role'] == 'admin') {
          echo ('<li class="nav-item">
          <a class="nav-link text-white" href="index.php?path=admin&action=admin">DASHBOARD</a>
        </li>');
        } ?>

      </ul>
      <div class="me-3">
        <a href="">
          <i class="fas fa-shopping-basket">
            
          </i>
        </a>
      </div>

      <form class="d-flex input-group w-auto">
        <button class="btn  " type="button" data-mdb-ripple-color="dark">
          <?php
          if (isset($_SESSION['pseudo']) && $_SESSION['role'] == 'joueur') {
            echo ('<a  href="index.php?path=main&action=profil&num=' . $_SESSION['id'] . '"> <img class="rounded-circle" src="./image/' . $_SESSION['image'] . ' " style="width:2rem; height:2rem;" alt=""> </a>');
          } else {
            echo ('<a href="index.php?path=admin&action=admin"> <img class="rounded-circle" src="./image/placeholder.png " style="width:2rem; height:2rem;" alt=""> </a>');
          }

          ?>



        </button>
      </form>
    </div>
  </div>
</nav>