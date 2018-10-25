<?php 
	include("PDO/co_bdd.php");
	$login = $_POST['login'];

	$reponse = $bdd->query('SELECT login,id FROM users');
		while ($donnees = $reponse->fetch()){
			if ($login === $donnees['login']){
				var_dump($donnees['login']);
				var_dump($donnees['id']);
				echo '</br>';
			}
	}
		// else{
		// 	echo 'Ce login n\'est pas en base de données !';
		// }
$reponse->closeCursor();


 ?>