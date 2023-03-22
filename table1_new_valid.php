<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<title>Validation</title>
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require('header.php');
?>
<a href="../table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>Gestion de nos histoires</h1>
<p>Vous venez d'ajouter une nouvelles histoire</p>
<hr>
<?php
$titre=$_POST['titre'];
$annee=$_POST['annee'];
$description=$_POST['desc'];
$type=$_POST['type'];
$popularitee=$_POST['popularitee'];
$numcreateur=$_POST['numcreateur'];


$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');

$imageType=$_FILES["photo"]["type"];
	        if (($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
    		//creation d'un nouveau nom pour cette image téléchargée
            // pour éviter d'avoir 2 fichiers avec le même nom
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	

    		// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	            "images/uploads/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }

$req = 'INSERT INTO mythes(mARG_titre,mARG_annee,mARG_desc,mARG_photo,mARG_type,mARG_popularitee,_crea_id) 
        VALUES("'.$titre.'","'.$annee.'", "'.$description.'","'.$nouvelleImage.'","'.$type.'","'.$popularitee.'","'.$numcreateur.'" )';


$resultat = $mabd->query($req);

?>
</tbody>
</table>
<?php
// Appel du Pied de Page
require('footer.php');
?> 
</body>
</html>