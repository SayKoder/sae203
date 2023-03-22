<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ajouter</title>
<title>Ajouter une histoire</title></head>
<body>
<?php
// Appel du bloc Header et du Menu>
require('../header.php');
?>
<a href="../admin.php">Retour au tableau de données</a> 
<hr>
<h1>Gestion de nos histoires</h1>
<p>Ajouter une nouvelles histoire</p>
<hr>
<form action="table1_new_ajout.php" method="POST" enctype="multipart/form-data">
    Titre:<input type="text" name="titre"><br>
    Année:<input type="number" name="annee" min="0" max="2023"><br>
    Description:<input type="text" name="desc"><br>
    Type:<input type="text" name="type"><br>
    Popularitee:<input type="text" name="popularitee"><br>
	Images : <input type="file" name="photo" required /><br />
    Createur:
    <select name="numcreateur">
   
            <?php
    
            $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM  Createur";
            echo $req;
            $resultat = $mabd->query($req);

     foreach ($resultat as $value) {
       echo '<option value="'.$value['crea_id'].'">'.$value['crea_nom'].'</option>';
     }
    
    ?>
    </select>
	
<input type="submit" name="Ajouter">
</form>

</tbody>
</table>
<?php
// Appel du Pied de Page
require('../footer.php');
?> 
</body>
</html>