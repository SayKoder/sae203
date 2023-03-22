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
<a href="table2_gestion.php">Retour au tableau de données</a> 
<hr>
<h1>Gestion des Créateurs</h1>
<p>Ajouter un Créateur</p>
<hr>
<form action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
    ID:<input type="text" name="id"><br>
    Nom:<input type="text" name="nom"><br>
    Plateforme:<input type="text" name="plt"><br>
    Nationalitee:<input type="text" name="ntl"><br>
	
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