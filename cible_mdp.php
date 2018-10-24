<?php 
	include("co_bdd.php");
	session_start();
	$id = $_SESSION['id'];
	$pass = $_POST['new_pass'];
	$pass2 = $_POST['new_pass2'];
		if (empty($pass || $pass2)){
			echo 'Les champs sont vides';
			header("Refresh:0;URL=compte.php");
	}
		elseif ($pass == $pass2) {
			$hashedPassword = password_hash($pass, PASSWORD_ARGON2I);
			$req=$bdd->prepare('UPDATE users SET password = :password WHERE id = :id');
			$req->bindParam(':id', $id);
		$req->bindParam(':password', $hashedPassword);
		echo 'Mot de passe changé avec succès';
		header("Refresh:0;URL=compte.php");
	}
		else {
			echo 'Les mots de passe sont différents';
			header("Refresh:0;URL=compte.php");
	}
?>