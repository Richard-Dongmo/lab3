<?php $page = "Top 5";
  include_once("inc/header.php");
  include_once("inc/data.php"); ?>

  <h1>Top 5 des meilleurs jeux</h1>
      <!-- CODEZ ICI LA LISTE DES TOP TEL QUE DEMANDÉ DANS L'ÉNONCÉ -->

  <?php foreach($top as $cle => $valeur){ ?>
    <ul>
      <li><?php echo $cle; ?>
        <ol>
          <?php foreach($valeur as $val){ ?>
            <li><a href="" name="$val"><?php echo $val; ?></a></li>
          <?php } ?>
          </ol>
      </li>
    </ul>
  <?php } ?>
<?php include_once("inc/footer.php"); ?>
