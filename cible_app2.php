<?php include("co_bdd.php") ?>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=JEU;charset=utf8', 'jeremydata', 'b302937ba5');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>
<?php

    if(isset($_POST['nom2'], $_POST['ancien_possesseur'], $_POST['nouveau_possesseur'], $_POST['console2'], $_POST['prix_vente'])){
        $req = $bdd->prepare('INSERT INTO vente_jeux(nom2, ancien_possesseur, nouveau_possesseur, console2, prix_vente) VALUES(:nom2, :ancien_possesseur, :nouveau_possesseur, :console2, :prix_vente)');
        $req->bindParam(':nom2',$_POST['nom2']);
        $req->bindParam(':ancien_possesseur', $_POST['ancien_possesseur']);
        $req->bindParam(':nouveau_possesseur', $_POST['nouveau_possesseur']);
        $req->bindParam(':console2', $_POST['console2']);
        $req->bindParam(':prix_vente', $_POST['prix_vente']);      
        $sucess = $req->execute();
        if($sucess === false){
           echo implode(' ',$req->errorInfo());
        }
    }
        if($sucess === true){
            echo 'Le jeu à bien été ajouté !';
            header("Refresh: 0; URL=index.php");
        }
        else {
            echo 'Les champs entrés ne sont pas conformes !';
            header("Refresh: 0; URL=index.php");
        }

 ?>
 
<?php

$reponse->closeCursor();
?>