<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 5</h1>
        <p>
        <?php
            // Pour $count allant de 1 à 15 en incrémentant +1 à chaque passage dans la boucle
            for($count = 1; $count <=15; $count++){
                // On affiche:
                echo 'On y arrive presque.';
        ?>
            <br>
        <?php
            }
        ?>
        </p>
        <a href="../"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>