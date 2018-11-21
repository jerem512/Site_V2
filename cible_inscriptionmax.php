<?php 
    include("PDO/co_bdd.php");
    if(isset($_POST['name'], $_POST['email'], $_POST['login'], $_POST['password'], $_POST['password2'], $_POST['BirthMonth'], $_POST['BirthDay'], $_POST['BirthYear'], $_POST['question'], $_POST['rep'])){
        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];
        if($pass == $pass2){
            $hashedPassword = password_hash($_POST['password'], PASSWORD_ARGON2I);
            $req = $bdd->prepare('INSERT INTO users(name, email, login, password, BirthMonth, BirthDay, BirthYear, question, rep) VALUES(:name, :email, :login, :password, :BirthMonth, :BirthDay, :BirthYear, :question, :rep)');
            $req->bindParam(':name',$_POST['name']);
            $req->bindParam(':email', $_POST['email']);
            $req->bindParam(':login', $_POST['login']);
            $req->bindParam(':password', $hashedPassword);
            $req->bindParam(':BirthMonth', $_POST['BirthMonth']);
            $req->bindParam(':BirthDay', $_POST['BirthDay']);
            $req->bindParam(':BirthYear', $_POST['BirthYear']);
            $req->bindParam(':question', $_POST['question']);
            $req->bindParam(':rep', $_POST['rep']);
            $sucess = $req->execute();
            if($sucess === false){
                echo implode(' ',$req->errorInfo());
            }
        }
        else{
            echo 'non';
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
        $req->closeCursor(); 
?>





            var_dump($id);
            echo '<br />';
            var_dump($pass);
            echo '<br />';
            var_dump($pass2);
            echo '<br />';  