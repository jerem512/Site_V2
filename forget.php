<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mot de passe oublié</title>
</head>
<body>
	<?php 
		include("header.php");
?>
<div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal" action="cible_forget.php" method="post">
            <h1>Mot de passe oublié :</h1>
              <div class="form-group">
                <label for="login">Login du compte oublié :</label>
                <input class="form-control" id="login" placeholder="Login" name="login">
                <button class="btn btn-default">Envoyer</button>
              </div>
            </form>
           </div>
          </div>
      </div>
</body>
	<?php include("footer.php") ?>
</html>