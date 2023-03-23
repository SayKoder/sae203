<?php
    if ( (empty($_GET['search'])) ) {
        header('Location: form_recherche.php');

    }
    $search = $_GET['search'];
    $search_nettoye =  filter_var( $search , FILTER_SANITIZE_SPECIAL_CHARS);
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Recherche</title>

</head>
    <body>
        <?php
        // Appel du bloc Header et du Menu>
        require('header.php');
?>
        
        <div class="rep">
            <h1> Bienvenue dans les tréfonds ! </h1>
                <?php
                echo '<p1>Ton ou tes résultat(s) : '.$search_nettoye.'</p1>'."\n";
                $prixmax = $_GET['search'];
                $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'CarlPHP02#');
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM mythes
                            INNER JOIN createur
                            ON mythes._crea_id = createur.crea_id
                            WHERE mARG_titre LIKE '%" .$search. "%'";
                $resultat = $mabd->query($req);
                if (empty($_GET['search'])) {
                    header('Location: formulaire_recherche.php?erreur=vide');
                    exit;}
                foreach ($resultat as $value) {
                    echo '<div class="card">';
                    echo '<img class="dimg" src=images/uploads/'.$value['mARG_photo'].'>';
                    echo '<h3>'.$value['mARG_titre'] . '</h3>';
                    echo '<p>Parrution : ' . $value['mARG_annee'] . '</p>';
                    echo '<p class="type">' . $value['mARG_type'] . ' </p>';
                    echo '<p>Résumé: ' . $value['mARG_desc'] . ' </p>';
                    echo '<p>Popularité: ' . $value['mARG_popularitee'] . ' </p>';
                    echo '<p class="crea"> de ' . $value['crea_nom'] . '</p>';
                    echo '</div>';
                }
                ?>
        </div>
        
    <?php
    // Appel du Pied de Page
    require('footer.php');
    ?>
    </body>
</html>