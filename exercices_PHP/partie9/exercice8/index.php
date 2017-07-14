<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8 - Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 8</h1>
        <p>
        <?php
            // On affiche la date du jours (format JJ-MM-AAAA)) et on enlève 22 jours
            echo date('d-m-Y', strtotime('-22 days'));
        ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>