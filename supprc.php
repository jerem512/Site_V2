<?php 
	include("header.php");
	include("PDO/co_bdd.php");
	session_start();
	
	$req = $bdd->prepare('DELETE FROM users WHERE login = :login');
	$req->bindParam(':login', $_SESSION['login']);
	$success = $req->execute();
		if($success === true){
			header("Location: index.php");
		}
		else{
			echo 'Impossible de supprimer le compte !';
			header("Refresh: 1; URL= compte.php");
		}


 ?>