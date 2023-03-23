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
<div id="dlien">
    <div id="lun">
        <a href="../index.php">Retour aux tréfonds</a>
    </div>
    <div id="deux">
        <a href="../admin/table1_gestion.php">Tableau des Mythes</a> 
    </div>
    <div id="trois">	
        <a href="../admin/table2_gestion.php">Tableau des Créateurs</a> 	
    </div>
</div>
<?php
// Appel du Pied de Page
require('../footer.php');
?>   

</body>
</html>