<!DOCTYPE html>
<html>
<head><title>Suppression Album</title></head>
<body>
<a href="../table1_gestion.php">retour au tableau de bord</a> 	
<hr> <h1>gestion de nos albums</h1> <hr>

<?php
// recupérer dans l'url l'id de l'album à supprimer
$album=$_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');

// tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
$req = 'DELETE  FROM Mythes WHERE mARG_id='. $album; 

// cette ligne sert juste pour le debug. à supprimer quand tout marche correctement  
echo $req;
 
$resultat = $mabd->query($req);

echo '<h2>Vous venez de supprimer le Mythe numéro '.$album.'</h2>';
?>

</body>
</html>