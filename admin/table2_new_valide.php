<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
	<title>Validation</title>
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require('../header.php');
?>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>Gestion de nos histoires</h1>
<p>Vous venez d'ajouter une nouvelles histoire</p>
<hr>
<?php
$id=$_POST['id'];
$nom=$_POST['nom'];
$plateforme=$_POST['plt'];
$nationalitee=$_POST['ntl'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');


$req = 'INSERT INTO createur(crea_id,crea_nom,crea_plateforme,crea_nationalitee) 
        VALUES("'.$id.'","'.$nom.'", "'.$plateforme.'","'.$nationalitee.'")';


$resultat = $mabd->query($req);

?>
</tbody>
</table>
<?php
// Appel du Pied de Page
require('../footer.php');
?> 
</body>
</html>