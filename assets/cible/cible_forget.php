<?php 
	include("PDO/co_bdd.php");
	$login = $_POST['login'];

	$reponse = $bdd->query('SELECT login,id FROM users');
		while ($donnees = $reponse->fetch()){
			if ($login === $donnees['login']){
				var_dump($donnees['login']);
				echo '</br>';
				// header("Location: forgetmdp.php");
			}
			else{
				echo 'non';
			}
	}
	$reponse->closeCursor();
 ?>