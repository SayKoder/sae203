<?php
    if ( (empty($_POST['search'])) ) {
        header('Location: form_recherche.php');

    }
    $search = $_POST['search'];
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
        <div>
            <h1> Bienvenue dans les tréfonds ! </h1>
                <?php
                echo '<p>Ton ou tes résultat(s) : '.$search_nettoye.'</p>'."\n";

                ?>
        </div>
        
    <?php
    // Appel du Pied de Page
    require('footer.php');
    ?>
    </body>
</html>