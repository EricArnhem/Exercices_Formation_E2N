<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 4</h1>
        <p>
        <?php
            // On initialise la variable $count à 1
            $count = 1;
            // Tant que $count < 10
            while($count < 10){
                echo $count;
        ?>
            <br>
        <?php
                $count = $count / 2;
            }
        ?>
        </p>
        <a href="../"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>