<?php 
	include("co_bdd.php");
	session_start();
	$id = $_SESSION['id'];
	$pass = $_POST['new_pass'];
	$pass2 = $_POST['new_pass2'];
		if (empty($pass || $pass2)){
?>
	<script>alert("Les champs sont vides !") </script>
<?php
			header("Refresh:0;URL=compte.php");
	}
		elseif ($pass == $pass2) {
			$hashedPassword = password_hash($pass, PASSWORD_ARGON2I);
			$req=$bdd->prepare('UPDATE users SET password = :password WHERE id = :id');
			$req->bindParam(':id', $id);
		$req->bindParam(':password', $hashedPassword);
?> 
		<script>alert("Votre mot de passe a été changé avec succès !") </script>
<?php
		header("Refresh:0;URL=compte.php");
	}
		else {
?>
		<script>alert("Les mots de passe sont différents !") </script>
<?php  
			header("Refresh:0;URL=compte.php");
	}
?>