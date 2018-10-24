<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma liste de jeux</title>
</head>
<body>
    <?php 
    include("entete.php");
    session_start();
    include("navbar.php");
    if(empty($_SESSION)){
    header("Refresh:0; URL=index.php");
  }
    include("testnavbar.php");
    include("PDO/co_bdd.php");

    $req = $bdd->prepare('SELECT login, nom FROM jeux_video WHERE login = admin');
        while ($donnees = $req->fetch()){
            var_dump($donnees['nom']);
        }
    




?>
</body>
</html>