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

<a href="table1_gestion.php">retour au tableau de bord</a> 
<hr>
<h1>gestion de nos histoires</h1>
<p>modification d'une histoire</p>

<?php

$num = $_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');
$req = 'SELECT * FROM  mythes WHERE mARG_id="'.$num.'"';
$resultat = $mabd->query($req);
$album = $resultat->fetch();

?>
<hr>	
<form method="POST" action="table1_update_valide.php" enctype="multipart/form-data">

    <input type="hidden" name="num"  value="<?php echo $album['mARG_id']; ?>"><br>
    Titre:<input type="text" name="titre" value="<?php echo $album['mARG_titre'] ?>"><br>
    Année:<input type="number" name="annee" min="0" max="2023" value="<?php echo $album['mARG_annee'] ?>"><br>
    Description:<input type="text" name="desc" value="<?php echo $album['mARG_desc'] ?>"><br>
    Type:<input type="text" name="type" value="<?php echo $album['mARG_type'] ?>"><br>
    Popularitee:<input type="text" name="popularitee" value="<?php echo $album['mARG_popularitee'] ?>"><br>
	Image : <input type="file" name="photo"/><br />
    Createur:
    <select name="numcreateur">
   
    <?php
        $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
        $mabd->query('SET NAMES utf8;');
        $req = "SELECT * FROM  createur ";
        $resultat = $mabd->query($req);

foreach ($resultat as $value) {
    $selection="";
    if($album['_crea_id'] == $value['crea_id']) $selection="selected";
    echo '<option '.$selection . ' value="' . $value['crea_id'] . '"> ' . $value['crea_nom'] . ' </option>';}
         ?>

    
    </select>
    <br>   
    <input type="submit" name="Envoyer">
</form>
<?php
// Appel du Pied de Page
require('../footer.php');
?> 
</body>
</html>