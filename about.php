<!DOCTYPE html>
	<html lang="en">
	<head>
		<link rel="shortcut icon" href="./assets/css/photo/logo.png">
		<meta charset="UTF-8">
		<title>A propos</title>
	</head>
	<body>
		<div class="container">
		<?php
		session_start();
		include("assets/assists/header.php");
		include("assets/assists/navbar.php");
		include("assets/assists/auth.php");
		 ?>
		<h1><u>Bienvenu, <?php echo htmlspecialchars($_SESSION['login']) . '!' ?></u></h1>
		<p class="abouttext">Ce site a été créé par jeremy Marchal, pour tester ses <br>
		connaissances en php/sql. <br> Le concept est de créer une base de données pour <br> y insérer des tables. Le site est composé <br> d'une table users pour gérer les créations de compte,<br> les connexions au site. Et d'une table comportant des jeux vidéos. <br> Le but du site est de pouvoir avoir une archive des jeux que l'ont a acheté ou revendu. <br> Le site est en contante évolution afin de montrer toutes les nouvelles <br> connaissances acquise lors de son apprentissage. </p>
		</div>
	</body>
	<?php include("assets/assists/footer.php"); ?>
	</html>