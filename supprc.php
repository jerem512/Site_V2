<?php 
	include("header.php");
	include("PDO/co_bdd.php");
	session_start();
	$req = $bdd->prepare('DELETE FROM users WHERE login = :login');
	$req->bindParam(':login', $_SESSION['login']);
	$success = $req->execute();
		if($success === true){
?>
	<script>alert("Compte supprimé !")</script>
<?php
			header("Location: index.php");
		}
		else{
?>
	<script>alert("Impossible de supprimer le compte !")</script>
<?php
			header("Refresh: 1; URL= compte.php");
		}
 ?>