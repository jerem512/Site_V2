<?php
    include("PDO/co_bdd.php");
    session_start();
    $req = $bdd->prepare('SELECT * FROM users');
    $success = $req->execute();
    if($donnees = $req->fetch()){
        if($donnees['id'] === $_SESSION['id'] && $donnees['login'] === $_SESSION['login']){
            echo 'ok good';
        }
        else{
            header("Location: index.php");
        }
    }
?>