<?php 
	include("assets/assists/co_bdd.php");
	session_start();
	$id = $_SESSION['id'];
	$pass = $_POST['new_pass'];
	$pass2 = $_POST['new_pass2'];
		if ($pass == $pass2){
			echo 'oui';
	?>
	<script>alert("Votre mot de passe a été changé avec succès !") </script>
	<?php
			header("Refresh:0;URL=compte.php");
		}
		elseif(empty($pass || $pass2)){
			echo 'vide !';
		?>
		<script>alert("Les champs sont vides !") </script>
		<?php
			// header("Refresh:0;URL=compte.php");
		}
		else{
	?>
	<script>alert("Les mots de passe sont différents !") </script>
	<?php
			header("Refresh:0;URL=compte.php");
		}
?>