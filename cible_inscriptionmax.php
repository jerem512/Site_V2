<?php 
	include("PDO/co_bdd.php");
    if(isset($_POST['name'], $_POST['mail'], $_POST['username'], $_POST['password'], $_POST['password2'], $_POST['BirthMonth'], $_POST['BirthDay'], $_POST['BirthYear'], $_POST['question'], $_POST['rep'])){
    	$pass = $_POST['password'];
     	$pass2 = $_POST['password2'];
     	if($pass == $pass2){
        $hashedPassword = password_hash($_POST['password'], PASSWORD_ARGON2I);
        $req = $bdd->prepare('INSERT INTO users(name, mail, username, password, BirthMonth, BirthDay, BirthYear, question, rep) VALUES(:name, :mail, :username, :password, :BirthMonth, :BirthDay, :BirthYear, :question, :rep)');
        $req->bindParam(':name',$_POST['name']);
        $req->bindParam(':mail', $_POST['mail']);
        $req->bindParam(':username', $_POST['username']);
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
        else{
        	?>
        	<script>alert("Les mots de passes ne sont pas identiques !") </script>
        	<?php
        	header("Refresh : 1; URL= inscription.php");
        }
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
        $resultat->closeCursor(); 
?>
