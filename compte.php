<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modifications</title>
</head>
<body>
  <?php
    session_start(); 
    include("assets/assists/header.php");
    include("assets/assists/comptenavbar.php");
    include("assets/assists/auth.php");
  ?>
  <div class="container">
     <h1><i><u>Mon compte : </u></i></h1>
      <legend class="legend">Gestion de compte :</legend>
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
              <br> <br>
      </form>
      <form action="infosp.php" method="post">
        <legend class="legend">Changement données personnelles :</legend>
              <div class="form-group">
               <label for="text" class="col-lg-2 control-label">Nouveau nom:</label>
               <input type="text" class="form-control" id="text" placeholder="Nom" name="new_nom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label">Nouveau prénom:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prénom" name="new_prenom">
              </div>
              <div class="form-group">
                <label for="textarea" class="col-lg-2 control-label" >Nouveau mail:</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="exemple@exemple.fr" name="new_mail">
              </div>
              <button class="btn btn-default">Changer les données personnelles</button>
      </form>  
  </div>
  <?php include("assets/assists/footer.php") ?>
</body>
</html>