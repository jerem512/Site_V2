<?php include("PDO/co_bdd.php");
    if(isset($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['date_naissance'], $_POST['login'], $_POST['password'])){
        $hashedPassword = password_hash($_POST['password'], PASSWORD_ARGON2I);
        $req = $bdd->prepare('INSERT INTO users(nom, prenom, mail, date_naissance, login, password) VALUES(:nom, :prenom, :mail, :date_naissance, :login, :password)');
        $req->bindParam(':nom',$_POST['nom']);
        $req->bindParam(':prenom', $_POST['prenom']);
        $req->bindParam(':mail', $_POST['mail']);
        $req->bindParam(':date_naissance', $_POST['date_naissance']);
        $req->bindParam(':login', $_POST['login']);
        $req->bindParam(':password', $hashedPassword);
        $sucess = $req->execute();
        if($sucess === false){
           echo implode(' ',$req->errorInfo());
        }
    }
        $req = $bdd->prepare('SELECT id, login FROM users WHERE login = :login');
        $req->bindParam(':login',$_POST['login']);
        $req->execute();
        $resultat=$req->fetch();
        if($sucess === true){
            session_start();
            $_SESSION['login'] = $resultat['login'];
            $_SESSION['id'] = $resultat['id'];            
?>
        <script>alert("Vous êtes bien inscrit !") </script>
        <?php
            header("Refresh: 1; URL=app.php");
        }
        else {
?>
        <script>alert("Les champs entrés ne sont pas conformes !") </script>
        <?php
            header("Refresh: 1; URL=inscription.php");
        }
        $reponse->closeCursor(); 
?>