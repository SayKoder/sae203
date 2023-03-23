<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mythes et ARG</title>
</head>

<body>
<?php
// Appel du bloc Header et du Menu>
require('header.php');
?>

<main>
    <section>
        <h1>Pour plus approfondir les sujets :</h1>
        <div class="partage">
            <img src="images/uploads/Feldup.png" alt="Feldup" id="felimg">
            <div class="txt">
                <h2>Feldup, pionier FR dans l'explication des ARG et des Mythes horrifique</h2>
                <p>Feldup est un YouTubeur français de plus d'un million d'abonnés (1.9m). Il fait principalement des vidéos parlant du monde de l'horreur, 
                    de la musique et des ARGs (Alternate Reality Game). Il est surtout connu pour son émission Findings, qui traite de plusieurs 
                    sujets qu'il a envie d'aborder et qu'il trouve intéressants par leur mystère. C'est un bon créateur si vous chercher à vous informer
                    sur l'horreur et ses alentours. Oui</p>
            </div>
        
            <div class="illu">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fOxWEFzrKkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="partage">
            <img src="images/uploads/PARADOX.jpg" alt="">
            <div class="txt">
                <h2>PARADOX</h2>
                <p>PARADOX est un youtuber qui approfondis le sujet sur le thème du paranormal des creepy pasta et encore du gore sur le darknet 
                    ou des histoires de ce type. Le tous est traité intelligement et avec professionnalisme
                </p>

            </div>
            <div class="illu">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/NhaBcZBFqOM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
</main>


<?php
// Appel du Pied de Page
require('footer.php');
?>   
</body>



</html>