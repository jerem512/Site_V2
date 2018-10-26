<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des membres</title>
</head>
<body>
	<?php
		session_start();
		include("assets/assists/header.php");
		include("assets/assists/navbar.php");
		include("assets/assists/auth.php");
		include("PDO/co_bdd.php");
	 ?>
	 <h1><u>Liste des membres :</u></h1>
    <table>
    <thead>
        <tr>
			<th>Noms :</th>
        </tr>
    </thead>
    <?php
      $reponse = $bdd->query('SELECT login FROM users ORDER BY login');
      while ($donnees = $reponse->fetch()){
?>
<tbody>
<tr>
    <td><?php echo htmlspecialchars($donnees['login']) ?></td>
</tr>
</tbody>
<?php
}
    $reponse->closeCursor();
?>
</table>
	<?php include("assets/assists/footer.php") ?>
</body>
</html>