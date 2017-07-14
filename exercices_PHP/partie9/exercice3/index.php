<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 - Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 3</h1>
        <p>
        <?php
            // On modifie les informations de localisation (france)
            setlocale(LC_TIME, 'fr_FR.utf8');
            // On affiche la date au format vendredi 28 avril 2017
            echo 'Nous sommes le : ' . strftime('%A %d %B %Y');
        ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>