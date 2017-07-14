<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            // On initialise la variable $noValue à NULL (rien)
            $noValue = NULL;
            // On l'affiche (ça n'affiche rien donc ok)
            echo $noValue;
        ?>
        <p>
            <?php
                // On change la valeur de $noValue à 850
                $noValue = 850;
                // On affiche la valeur de $noValue
                echo $noValue;
            ?>
        </p>
    </body>
</html>