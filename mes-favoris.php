<?php $page = "Mes favoris";
  include_once("inc/header.php"); ?>

  <h1>Mes jeux favoris</h1>

      <!-- CODEZ ICI LA LISTE DES FAVORIS TEL QUE DEMANDÉ DANS L'ÉNONCÉ -->


  <form action="mes-favoris.php" method="post">
    <input type="checkbox" name="confirmer" value="oui" id="confirmer">
    <label for="confirmer">Confirmer la suppression des favoris</label><br>
    <input type="submit" value="Supprimer favoris">
  </form>
  
<?php include_once("inc/footer.php"); ?>