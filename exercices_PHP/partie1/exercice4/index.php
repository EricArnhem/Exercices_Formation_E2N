<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            // On initialise les variables
            $varString = 'Bonjour';
            $varInt = 33;
            $varFloat = 3.14;
            $varBool = true;
        ?>
        <p>
            <?php
                // On affiche la variable $varString
                echo 'String: ' . $varString;
            ?>
        </p>
        <p>
            <?php
                // On affiche la variable $varInt
                echo 'Int: ' . $varInt;
            ?>
        </p>
        <p>
            <?php
                // On affiche la variable $varFloat
                echo 'Float: ' . $varFloat;
            ?>
        </p>
        <p>
            <?php
                // On affiche la variable $varBool
                echo 'Bool: ' . $varBool;
            ?>
        </p>
    </body>
</html>