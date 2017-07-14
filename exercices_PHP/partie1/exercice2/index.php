<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - Partie 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            // On initialise les variables
            $lastName = 'Arnhem';
            $firstName = 'Eric';
            $age = 18;
        ?>
        <p>
            <?php
                // On affiche les variables en les concaténant avec des chaines de caractères
                echo $lastName . ' ' . $firstName . ', ' . $age . ' ans';
            ?>
        </p>
    </body>
</html>