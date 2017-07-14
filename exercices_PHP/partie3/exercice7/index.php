<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7 - Partie 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 7</h1>
        <p>
        <?php
            // Pour $count allant de 1 à 100 en incrémentant +15 à chaque passage dans la boucle
            for($count = 1; $count <= 100; $count = $count + 15){
                // On affiche;
                echo 'On tient le bon bout.';
        ?>
            <br>
        <?php
            }
        ?>
        </p>
        <a href="../"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>