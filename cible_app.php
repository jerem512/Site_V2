<?php 
    include("PDO/co_bdd.php");
    session_start();
    if(isset($_POST['nom'], $_POST['console'], $_POST['prix'], $_POST['nbre_joueurs_max'], $_POST['commentaires'])){
        $req = $bdd->prepare('INSERT INTO jeux_video(nom, login, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :login, :console, :prix, :nbre_joueurs_max, :commentaires)');
        $req->bindParam(':nom',$_POST['nom']);
        $req->bindParam(':login', $_SESSION['login']);
        $req->bindParam(':console', $_POST['console']);
        $req->bindParam(':prix', $_POST['prix']);
        $req->bindParam(':nbre_joueurs_max', $_POST['nbre_joueurs_max']);
        $req->bindParam(':commentaires', $_POST['commentaires']);        
        $sucess = $req->execute();
    }
        if($sucess === true){
?>
        <script>alert("Le jeu a bien été ajouté !")</script>
        <?php
            header("Refresh: 0; URL=app.php");
        }
        else {
?>
        <script> alert("Un des champs est incorect !")</script>
        <?php
            header("Refresh: 0; URL=app.php");
        }
    $reponse->closeCursor(); 
?>