<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connexion</title>
</head>
<body>
  <?php include("assets/assists/header.php"); ?>
<div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal" action="cible_co.php" method="post">
            <h1>Veuillez vous connecter</h1>
              <div class="form-group">
                <label for="login">Login :</label>
                <input class="form-control" id="login" placeholder="Login" name="login">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password :</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              </div>
              <br>
              <button class="btn btn-default">Se connecter</button>
                <br> <br>
              <a href="inscription.php" class="btn btn-default">Vous n'êtes pas encore inscrits ? Inscrivez-vous !</a>
                <br> <br>     
              <a href="forget.php" class="btn btn-default">Mot de passe oublié ?</a>
              </p>
            </form>
          </div>
        </div>
</div>
</body>
<?php include("assets/assists/footer.php") ?>
</html>
