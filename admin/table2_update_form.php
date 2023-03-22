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
<h1>Gestion de nos créateurs</h1>
<p>Modification des créateurs</p>

<?php

$num = $_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');
$req = 'SELECT * FROM  createur WHERE crea_id="'.$num.'"';
$resultat = $mabd->query($req);
$album = $resultat->fetch();

?>
<hr>	
<form method="POST" action="table2_update_valide.php" enctype="multipart/form-data">

    <input type="hidden" name="num"  value="<?php echo $album['crea_id']; ?>"><br>
    ID:<input type="text" name="id" value="<?php echo $album['crea_id'] ?>"><br>
    Nom:<input type="text" name="nom" value="<?php echo $album['crea_nom'] ?>"><br>
    Plateforme:<input type="text" name="plt" value="<?php echo $album['crea_plateforme'] ?>"><br>
    Nationalitee:<input type="text" name="ntl" value="<?php echo $album['crea_nationalitee'] ?>"><br>
    <br>   
    <input type="submit" name="Envoyer">
</form>
<?php
// Appel du Pied de Page
require('../footer.php');
?> 
</body>
</html>