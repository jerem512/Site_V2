<?php 
echo 'Vous êtes bien déconnecté.';
session_start();
$_SESSION = array();
session_destroy();
header("Refresh: 0; URL=index.php");
 ?>

