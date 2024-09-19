<!--Page de contact-->
<?php $page = "Contact";
  include_once("inc/header.php"); ?>

  <form method="post" action="#">
    <p>Veuillez compléter le formulaire suivant afin de nous envoyer vos questions ou vos commentaires. </p>

    <fieldset class="alignedlabel">
      <legend><strong>Vos coordonnées</strong></legend> <!-- Titre du fieldset -->
      <p>
        <label for="nom">Quel est votre nom ? *</label>
        <input type="text" name="nom" id="nom" required />
      </p>
      <p>
        <label for="email">Quel est votre e-mail ? *</label>
        <input type="email" name="email" id="email" placeholder="Ex: email@hotmail.com" required />
      </p>


    </fieldset>

    <fieldset>
      <legend><strong>Sujet de la question</strong></legend> <!-- Titre du fieldset -->

      <p>Quel est le sujet de votre question :<br>
        <input type="radio" name="sujet" value="Suggestion" id="auteur" /> <label for="auteur">Suggestion de Top 10</label><br>
        <input type="radio" name="sujet" value="Site Web" id="site" /> <label for="site">Site Web</label>
      </p>
      <p>
        <label for="question">Quel est votre question ou votre commentaire :</label><br />
        <textarea name="question" id="question" cols="50" rows="10"></textarea>
      </p>

      <p>
        <label for="appreciation">Quel est votre appréciation du site :</label>
        <select name="appreciation" id="appreciation">
          <option value="1">1</option>
          <option value="2">2</option>
          <option selected value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>

      </p>

    </fieldset>

    <input type="submit" value="Envoyer" />

  </form>

<?php include_once("inc/footer.php"); ?>