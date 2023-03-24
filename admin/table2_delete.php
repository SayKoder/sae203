<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Suppression Album</title></head>
<body>
<?php
// Appel du bloc Header et du Menu>
require('../header.php');
?>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
 <h1>Vous avez supprimé le créateur : n°</h1> 

<?php
// recupérer dans l'url l'id de l'album à supprimer
$album=$_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');

// tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
$req = 'DELETE  FROM createur WHERE crea_id='. $album; 

 
$resultat = $mabd->query($req);

echo '<h1>' .$album. '</h1>';
?>

<?php
// Appel du Pied de Page
require('../footer.php');
?> 
</body>
</html>