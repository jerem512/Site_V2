<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma liste de jeux</title>
</head>
<body>
    <h1><u>Mes jeux :</u></h1>
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
        session_start();
        include("entete.php");
        include("navbar.php");
        include("testnavbar.php");
        include("PDO/co_bdd.php");

        $req = $bdd->prepare('SELECT * FROM jeux_video WHERE login = :login ORDER BY nom');
        $req->bindParam(':login', $_SESSION['login'] );
        $success = $req->execute();
        while($donnees = $req->fetch()){
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
<?php include("pied_de_page.php") ?>
</html>