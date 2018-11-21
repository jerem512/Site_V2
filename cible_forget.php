<?php 
	include("PDO/co_bdd.php");
	$login = $_POST['login'];
	$pass = $_POST['new_pass'];
	$pass2 = $_POST['new_pass2'];
	if(empty($login && $pass && $pass2)){
		?>
		<script>alert('Les champs sont vides !')</script>
<?php
		// header('Location: forget.php');
	}
		elseif ($pass == $pass2) {
			$hashedPassword = password_hash($pass, PASSWORD_ARGON2I);
			$req = $bdd->prepare('UPDATE users SET password = :password WHERE login = :login');
			$req->bindParam(':login', $login);
			$req->bindParam(':password', $hashedPassword);
?> 
		<script>alert("Votre mot de passe a été changé avec succès !") </script>
<?php
		// header("Location: index.php");
	}
		else {
?>
		<script>alert("Les mots de passe sont différents !") </script>
<?php  
			// header("Location: forget.php");
	}



 ?>