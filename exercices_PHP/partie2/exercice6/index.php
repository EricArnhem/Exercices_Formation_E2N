<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 - Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // On déclare la variable
            $monAge = 18;
            // Si l'âge est supérieur ou égal à 18
            if ($monAge >= 18) {
                // On affiche:
                echo 'Tu es majeur';
              // Sinon
            } else {
                // On affiche:
                echo 'Tu n\'es pas majeur';
            }
            ?>
        </p>
    </body>
</html>