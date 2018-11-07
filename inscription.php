<!DOCTYPE html>
<html lang="fr">
<head>
  <title>inscription</title>
</head>
<body>
  <?php
   include("assets/assists/header.php");
    ?>
  <div class="container">
        <div class="row">
          <div>
            <form action="cible_inscription.php" method="post">
            <h1>Incrivez-vous :</h1>
              <div>
               <label for="text">Nom:</label>
               <input type="text" class="form-control" id="text" placeholder="Nom" name="nom" required="">
              </div>
              <div>
                <label for="textarea">Prénom:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prénom" name="prenom" required="">
              </div>
              <div>
                <label for="textarea">Mail:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="exemple@exemple.fr" name="mail" required="">
              </div>
              <div>
                <label for="textarea">Naissance:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="aaaa/mm/jj" name="date_naissance" required="">
              </div>
              <div>
                <label for="textarea">Login:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Entrez votre login" name="login" required="">
              </div>
              <div>
                <label for="textarea">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre password" name="password" required="">
              </div>
              <br>
              <button class="btn btn-default">S'inscricre</button>
            </form>
          </div>
        </div>
</div>
<?php include("assets/assists/footer.php") ?>
</body>
</html>