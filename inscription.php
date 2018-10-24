<!DOCTYPE html>
<html lang="fr">
<head>
  <title>inscription</title>
</head>
<body>
  <?php include("header.php"); ?>
  <div class="container">
        <div class="row">
          <div>
            <form action="cible_inscription.php" method="post">
            <h1>Incrivez-vous :</h1>
              <div>
               <label for="text">Nom:</label>
               <input type="text" class="form-control" id="text" placeholder="Nom" name="nom">
              </div>
              <div>
                <label for="textarea">Prénom:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prénom" name="prenom">
              </div>
              <div>
                <label for="textarea">Mail:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="exemple@exemple.fr" name="mail">
              </div>
              <div>
                <label for="textarea">Naissance:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="aaaa/mm/jj" name="date_naissance">
              </div>
              <div>
                <label for="textarea">Login:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Entrez votre login" name="login">
              </div>
              <div>
                <label for="textarea">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre password" name="password">
              </div>
              <br>
              <button class="btn btn-default">S'inscricre</button>
            </form>
          </div>
        </div>
</div>
<?php include("footer.php") ?>
</body>
</html>