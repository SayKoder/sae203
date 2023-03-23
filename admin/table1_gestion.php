<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Administration</title>
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require('../header.php');
?>

<a href="admin.php">Retour aux gestion des tréfonds</a> 	
	<hr>
<h1>Gestion des données du site</h1>

<hr>
<a href="table1_new_form.php">Ajouter un ARG/Mythe</a>
<table border=1>
	<thead>
		<tr><td>titre</td><td>Année</td><td>Type</td><td>Description</td><td>Popularitée</td><td>Images</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
    <tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM mythes";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td><img style"width: 200px; height:200px;" , src="../images/uploads/'.$value['mARG_photo'] . '" alt="photo"></td>';
    echo '<td>'.$value['mARG_titre'] . '</td>';
    echo '<td>' . $value['mARG_annee'] . '</td>';
    echo '<td>' . $value['mARG_type'] . '</td>';
    echo '<td>' . $value['mARG_desc'] . '</td>';
    echo '<td>' . $value['mARG_popularitee'] . '</td>';
    echo '<td>' .$value['mARG_photo']. '</td>';

    echo '<td> <a href="table1_delete.php?num='.$value['mARG_id'].'""> supprimer </a> </td>';
    echo '<td> <a href="table1_update_form.php?num='.$value['mARG_id'].'"" > modifier </a> </td>';

    echo '</tr>';
}
?>

</tbody>
</table>

<?php
// Appel du Pied de Page
require('../footer.php');
?>   
</body>
</html>