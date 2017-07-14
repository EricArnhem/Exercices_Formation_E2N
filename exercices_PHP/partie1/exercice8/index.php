<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8 - Partie 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            // On initialise les variables qui prennent en valeur le résultat du calcul qu'elles ont en valeur
            $additionResult = 3 + 4;
            $multiplicationResult = 5 * 20;
            $divisionResult = 45 / 5;
        ?>
        <p>
            <?php
                // On affiche le résultat de l'addition
                echo '3 + 4 = ' . $additionResult;
            ?>
        </p>
        <p>
            <?php
                // On affiche le résultat de la multiplication
                echo '5 × 20 = ' . $multiplicationResult;
            ?>
        </p><p>
            <?php
                // On affiche le résultat de la division
                echo '45 / 5 = ' . $divisionResult;
            ?>
        </p>
        
    </body>
</html>