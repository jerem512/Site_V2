<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des membres</title>
</head>
<body>
	<?php
		session_start();
		include("header.php");
		include("navbar.php");
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
	<?php include("footer.php") ?>
</body>
</html>