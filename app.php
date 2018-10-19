<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Vente de jeux</title>
</head>
<body>
  <?php include("entete.php"); ?>

  <?php
    session_start();
    if(empty($_SESSION)){
    header("Refresh:0; URL=index.php");
  } 
    ?>
  
  <?php include("menu_co.php") ?>
  
  <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form action="cible_app.php" method="post">
            <legend class="legend">Ajoutez un jeu :</legend>
              <div class="form-group">
                <label for="text" class="control-label">Nom :</label>
                <input type="text" class="form-control" id="text" placeholder="Nom" name="nom">
              </div>
              <div class="form-group">
                <label for="textarea" class="control-label" >Console :</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Console" name="console">
              </div>
              <div class="form-group">
                <label for="textarea" class="control-label" >Prix :</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Prix en €" name="prix">
              </div>
              <div class="form-group">
                <label for="textarea" class="control-label" >Nombre joueur max :</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Nombre de joueur max" name="nbre_joueurs_max">
              </div>
              <div class="form-group">
                <label for="textarea" class="control-label" >Commentaires :</label>
                <input type="textarea" class="form-control" id="textarea" placeholder="Commentaires..." name="commentaires">
              </div>
              <button class="btn btn-default">Ajouter le jeu</button>
            </form>
          </div>
        </div>
      </div>

</body>
<?php include("pied_de_page.php") ?>
</html>