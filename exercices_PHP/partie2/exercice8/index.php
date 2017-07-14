<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8 - Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // On déclare la variable à true
            $maVariable = true;
            // Si $maVariable == true
            if ($maVariable) {
                // On affiche:
                echo 'C\'est ok !!';
              // Sinon
            } else {
                // On affiche:
                echo 'C\'est pas bon !!!';
            }
            ?>
        </p>
    </body>
</html>