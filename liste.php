<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste des jeux</title>
</head>
<body>
  <?php
    session_start();
    if(empty($_SESSION)){
    header("Refresh:0; URL=index.php");
  } 
    ?>
    <?php include("entete.php"); ?>

    <?php include("menu_co.php") ?>

    <h1><u>Liste des jeux :</u></h1>
    <table>
    <thead>
        <tr>
           <th>Nom</th>
           <th>Possesseur</th>
           <th>Prix</th>
       </tr>
    </thead>

    <?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=JEU;charset=utf8', 'jeremydata', 'b302937ba5');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeux_video ORDER BY nom');

while ($donnees = $reponse->fetch())
{
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
    <a href="app.php" class="btn btn-default">Retour</a>
</body>
<?php include("pied_de_page.php") ?>
</html>