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
<h1>Gestion de nos Créateurs</h1>
<p>Vous venez de modifier un Créateur</p>
<hr>

<?php
//$titre=$_GET['...'];
$num = $_POST['num'];
$id=$_POST['id'];
$nom=$_POST['nom'];
$plateforme=$_POST['plt'];
$nationalitee=$_POST['ntl'];


$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');

    $req = "UPDATE createur
        SET crea_id='$id', crea_nom='$nom', crea_plateforme='$plateforme', crea_nationalitee='$nationalitee'
        WHERE crea_id ='$num'";


echo 'juste pour le debug: '. $req;
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