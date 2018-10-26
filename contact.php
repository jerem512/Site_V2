<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
</head>
<body>
	<?php 
		session_start();
		include("assets/assists/auth.php");
		include("assets/assists/navbar.php");
		include("assets/assists/header.php");
	 ?>	
	 <h1><u>Retrouvez et contactez moi sur ces réseaux :</u></h1>
	 <div class="icone">
	 	<a href="" class="icon fa-linkedin"><span class="label">Linkedin</span></a><br>
		<a href="https://github.com/jerem512" class="icon fa-github" ><span class="label">Github</span></a><br>
		<a href="mailto:jeremymarchal90@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a><br>
	</div>	
</body>
	<?php include("assets/assists/footer.php") ?>
</html>