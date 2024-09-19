<!-- Page d'accueil -->

<?php $page = "Accueil";
  include_once("inc/header.php"); ?>

    <!-- CODEZ ICI LA DIV DU LUNDI TEL QUE DEMANDÉ DANS L'ÉNONCÉ -->

  <div>
    <?php $date = date("w"); if ($date == 1){ ?>    
    <p><?php echo "Bon lundi"; }?></p>  
  </div>

  <h1>Le retrogaming</h1>
  <p class="intro">
    Le retrogaming, parfois francisé en rétrogaming, est l'activité qui consiste à jouer à des jeux vidéo anciens et à les collectionner. Il concerne les jeux sortis sur les consoles de jeu, les micro-ordinateurs, les bornes d'arcades ou les
    jeux dits « électroniques ».
  </p>
  <div class="row" id="article">
    <article>
      <h3>Festival du Retrogaming</h3>
      <a href="http://www.rom-game.fr/agenda/235-Retrogaming+Show+Marseille+Volume+4.html" target="_blank"><img src="images/retrogaming2014.jpg" alt="retro 2014" /></a>
      <p>
        Le Rétrogaming Show c'est avant tout une exposition muséographique de plus de 150 consoles vintage et ordinosaures en freeplay, ainsi que des bornes d'arcade de café, des flippers, depuis les années 70 à la fin des années 90, avec à n'en
        pas douter, la console de votre enfance au détour d'une allée.
      </p>
    </article>

    <article>
      <h3>Soirée Rétrogamning</h3>
      <a href="http://www.retrogamer.ca/retrogaming/une-soiree-retro-au-cegep-de-rimouski-le-7-fevrier/" target="_blank"><img src="images/soiree_retro.jpg" alt="Rimouski" /></a>
      <p>
        Depuis trois ans, un éducateur du Cégep de Rimouski organise une gigantesque arcade où le public peut jouer à plus de 30 jeux rétros. Ces soirées « retrogaming » sont très populaires chez les amateurs de jeux vidéo et de nostalgie.
      </p>
    </article>
  </div>

<?php include_once("inc/footer.php"); ?>