<nav class="navbar fixed-top navbar-expand-sm bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav nav-pills nav-fill">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php if (isset($_SESSION["id"]) and ($_SESSION["pro_id"] == 1 || $_SESSION["pro_id"] == 2)) { ?>
        <li><a class='nav-link' href='<?= hlien("appartenir", "index") ?>'>Appartenir</a></li>
        <li><a class='nav-link' href='<?= hlien("categorie", "index") ?>'>Categorie</a></li>
        <li><a class='nav-link' href='<?= hlien("fichier", "index") ?>'>Fichier</a></li>
        <li><a class='nav-link' href='<?= hlien("lecon", "index") ?>'>Lecon</a></li>
        <li><a class='nav-link' href='<?= hlien("profil", "index") ?>'>Profil</a></li>
        <li><a class='nav-link' href='<?= hlien("utilisateur", "index") ?>'>Utilisateur</a></li>
      <?php } else if (isset($_SESSION["pro_id"]) == 3) { ?>
        <li><a class='nav-link' href='<?= hlien("lecon", "index") ?>'>Lecon</a></li>
      <?php } ?>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <?php if (isset($_SESSION["id"])) { ?>
        <li><a class="nav-link" href=""><?= $_SESSION["nom"] ?> &nbsp;<span class="badge badge-info">[<?= $_SESSION["profil"] ?>]</span></a></li>
      <?php } ?>
      <!--<li><a class="nav-link" href="<?= hlien("database", "creer") ?>">Créer BDD</a></li>
    <li><a class="nav-link" href='<?= hlien("database", "dataset") ?>'>Jeu de données</a></li>-->
      <?php if (isset($_SESSION["id"])) { ?>
        <li><a class="nav-link" href="<?= hlien("authentification", "deconnexion") ?>">Déconnexion</a></li>
      <?php } else { ?>
        <li><a class="nav-link" href='<?= hlien("authentification", "connexion") ?>'>Connexion</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>