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
<div class="carreform">
  <h1>Chercher dans les tréfonds d'Internet :</h1>
  <form>
    <input type="text" placeholder="Recherche...">
    <button type="submit">Rechercher</button>
  </form>
</div>

<?php
// Appel du Pied de Page
require('footer.php');
?>
</body>
   
</html>