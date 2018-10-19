<?php include("co_bdd.php") ?>
<?php 
    session_start();
 ?>
<?php

    if(isset($_POST['nom'], $_POST['console'], $_POST['prix'], $_POST['nbre_joueurs_max'], $_POST['commentaires'])){
        $req = $bdd->prepare('INSERT INTO jeux_video(nom, login, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :login, :console, :prix, :nbre_joueurs_max, :commentaires)');
        $req->bindParam(':nom',$_POST['nom']);
        $req->bindParam(':login', $_SESSION['login']);
        $req->bindParam(':console', $_POST['console']);
        $req->bindParam(':prix', $_POST['prix']);
        $req->bindParam(':nbre_joueurs_max', $_POST['nbre_joueurs_max']);
        $req->bindParam(':commentaires', $_POST['commentaires']);        
        $sucess = $req->execute();
        if($sucess === false){
           echo implode(' ',$req->errorInfo());
        }
    }
        if($sucess === true){
            echo 'Le jeu à bien été ajouté !';
            header("Refresh: 0; URL=app.php");
        }
        else {
            echo 'Les champs entrés ne sont pas conformes !';
            header("Refresh: 0; URL=app.php");
        }

 ?>
 
<?php

$reponse->closeCursor();
?>