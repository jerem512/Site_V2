<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mot de passe oublié</title>
</head>
<body>
	<?php include("assets/assists/header.php"); ?>
<div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal" action="cible_forget.php" method="post">
            <h1>Mot de passe oublié :</h1>
              <div class="form-group">
                <label for="login">Login du compte oublié :</label>
                <input class="form-control" id="login" placeholder="Login" name="login">
              </div>
              <div class="form-group">
                <legend class="legend">Changement de mot de passe :</legend>
                <label for="login">Nouveau password :</label>
                <input type="password" class="form-control" id="Nouveau password" placeholder="Nouveau mot de passe" name="new_pass">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirmation password :</label>
                <input type="password" class="form-control" id="Nouveau password" placeholder="Confirmation mot de passe" name="new_pass2">
              </div>
              <br>
              <button class="btn btn-default">Changer de mot de passe</button>
            </div>
      </form>
    </div>
  </div>
</div>
</body>
	<?php include("assets/assists/footer.php") ?>
</html>