<?php
include("PDO/co_bdd.php");
if(isset($_POST['login'], $_POST['password'])){
    $req=$bdd->prepare('SELECT id, login, password FROM users WHERE login = :login');
    $req->bindParam(':login',$_POST['login']);
    $req->execute();
    $resultat=$req->fetch();
    if(!$resultat){
    ?>
    <script>alert("Mauvais identifiants !") </script>
    <?php 
        header("Refresh: 1; URL=index.php");

}
    else{
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
            if($isPasswordCorrect){
                    session_start();
                    ?>
                    <script>alert("Vous êtes connectés !")</script>
                    <?php
                    $_SESSION['login'] = $resultat['login'];
                    $_SESSION['id'] = $resultat['id'];
                    header("Refresh: 1; URL=app.php");
                }
                else{
                    ?>
                    <script>alert("Mauvais mot de passe !") </script>
                    <?php  
                    header("Refresh: 1; URL=index.php");
                }
            }
        }
?>