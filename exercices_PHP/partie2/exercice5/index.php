<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>
            <?php
            // On déclare la variable $maVariable
            $maVariable = 'Homme';
            // Si la valeur de la variable est différente de 'Homme'
            if ($maVariable != 'Homme') {
                // On affiche:
                echo 'C\'est une développeuse !!!';
              // Sinon
            } else {
                // On affiche:
                echo 'C\'est un développeur !!!';
            }
            ?>
        </h1>
    </body>
</html>