<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 - Partie 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 6</h1>
        <p>
        <?php
            // Pour $count allant de 20 à 0 en incrémentant -1 à chaque passage dans la boucle
            for($count = 20; $count >= 0; $count--){
                // On affiche:
                echo 'C\'est presque bon.';
        ?>
            <br>
        <?php
            }
        ?>
        </p>
        <a href="../"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>