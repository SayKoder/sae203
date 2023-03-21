<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Banque des Mythes</title>
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require('header.php');

?>
<?php
    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM Mythes
                            INNER JOIN Createur
                            ON Mythes._crea_id = Createur.crea_id";
                $resultat = $mabd->query($req);
                foreach ($resultat as $value) {
                    echo '<img class="dimg" src=images/uploads/'.$value['mARG_photo'].'>';
                    echo '<h3>'.$value['mARG_titre'] . '</h3>';
                    echo '<p>Parrution : ' . $value['mARG_annee'] . '</p>';
                    echo '<p class="type">' . $value['mARG_type'] . ' </p>';
                    echo '<p>Résumé: ' . $value['mARG_desc'] . ' </p>';
                    echo '<p>Popularité: ' . $value['mARG_popularitee'] . ' </p>';
                    echo '<p class="crea"> de ' . $value['crea_nom'] . '</p>';
                    echo '<hr>';
                }
        ?>

    </div>

<?php
// Appel du Pied de Page
require('footer.php');
?>  
</body>
</html>