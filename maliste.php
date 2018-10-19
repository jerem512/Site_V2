<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma liste de jeux</title>
</head>
<body>
    <?php include("entete.php") ?>

  <?php
    session_start();
    if(empty($_SESSION)){
    header("Refresh:0; URL=index.php");
  } 
    ?>

    <?php include("menu_co.php") ?>

    <?php 
        $reponse = $bdd->query('SELECT * FROM jeux_video WHERE login = :login ORDER BY nom');
        $reponse->bindParam(':login',$_SESSION['login']);
        $sucess = $reponse->execute();
        if($sucess === true){
            var_dump($donnees['nom']);
            echo 'ehoh';
        }
        else{
            echo 'bye !';
        }


?>
<?php

$reponse->closeCursor();

?>



</body>
</html>