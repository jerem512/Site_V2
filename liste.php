<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste des jeux</title>
</head>
<body>
  <?php
    session_start();

    // include("assets/assists/auth.php");
    include("PDO/co_bdd.php");
    include("assets/assists/header.php"); 
    include("assets/assists/navbar.php"); ?>

    <h1><u>Liste des jeux :</u></h1>
    <div class="container">
    <table>
    <thead>
        <tr>
           <th>Nom</th>
           <th>Possesseur</th>
           <th>Prix</th>
       </tr>
    </thead>

    <?php
      $reponse = $bdd->query('SELECT * FROM jeux_video ORDER BY nom');
      while ($donnees = $reponse->fetch()){
?>
<tbody>
<tr>
    <td><?php echo htmlspecialchars($donnees['nom']) ?></td>
    <td><?php echo htmlspecialchars($donnees['login']) ?></td>
    <td><?php echo htmlspecialchars($donnees['prix']) . '€' ?></td>
</tr>
</tbody>
<?php
}
    $reponse->closeCursor();
?>
</table>
</div>
</body>
<?php include("assets/assists/footer.php") ?>
</html>