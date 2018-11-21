<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma liste de jeux</title>
</head>
<body>
    <?php
        session_start(); 
        include("assets/assists/header.php");
        include("assets/assists/navbar.php");
        // include("assets/assists/auth.php");
     ?>
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
<?php include("assets/assists/footer.php") ?>
</html>