<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mot de passe oublié</title>
</head>
<body>
	<?php 
		include("assets/assists/header.php");
    include("assets/assists/auth.php");
?>
<div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal" action="cible_forget.php" method="post">
              <br> <br>
            <h1>Mot de passe oublié :</h1>
              <div class="form-group">
                <label for="login">Login du compte oublié :</label>
                <br> <br>
                <input class="form-control" id="login" placeholder="Login" name="login">
                <br> <br>
                <button class="btn btn-default">Envoyer</button>
              </div>
            </form>
           </div>
          </div>
      </div>
</body>
	<?php include("assets/assists/footer.php") ?>
</html>