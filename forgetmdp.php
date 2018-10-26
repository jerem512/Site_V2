<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Changer de mot de passe</title>
</head>
<body>
	<?php 
  include("assets/assists/header.php");
  include("assets/assists/auth.php");  
  ?>
  <div class="container">
      <form action="cible_mdp.php" method="post">
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
    	</form>
    </div>
</body>
	<?php include("assets/assists/footer.php") ?>
</html>