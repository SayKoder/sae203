<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Administration</title>
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require('header.php');
?>

<a href="../admin.php">Retour aux gestion des tréfonds</a> 	
	<hr>
<h1>Gestion des données du site</h1>
<p>pensez a proteger le dossier admin avec un htaccess :-)</p>
<hr>
<a href="table2_new_form.php">Ajouter un créateur</a>
<table border=1>
	<thead>
		<tr><td>ID</td><td>Nom</td><td>Plateforme</td><td>Nationalitee</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
    <tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM createur";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['crea_id'] . '</td>';
    echo '<td>' . $value['crea_nom'] . '</td>';
    echo '<td>' . $value['crea_plateforme'] . '</td>';
    echo '<td>' . $value['crea_nationalitee'] . '</td>';

    echo '<td> <a href="table2_delete.php?num='.$value['crea_id'].'""> supprimer </a> </td>';
    echo '<td> <a href="table2_update_form.php?num='.$value['crea_id'].'"" > modifier </a> </td>';

    echo '</tr>';
}
?>

</tbody>
</table>

<?php
// Appel du Pied de Page
require('footer.php');
?>   
</body>
</html>