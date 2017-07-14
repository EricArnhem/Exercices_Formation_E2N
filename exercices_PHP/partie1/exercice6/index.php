<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 - Partie 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            // On initialise la variable $name qui prend la valeur 'Eric'
            $name = 'Eric';
        ?>
        <p>
            <?php
                // On affiche la variable $name en la concaténant avec des chaînes de caractères
                echo 'Bonjour ' . $name . ', comment vas-tu ?'
            ?>
        </p>
    </body>
</html>