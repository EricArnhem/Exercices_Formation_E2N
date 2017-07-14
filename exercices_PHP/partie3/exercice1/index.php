<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1 - Partie 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 1</h1>
        <p>
        <?php
            // On initialise la variable $count à 0
            $count = 0;
            // Tant que $count < 10
            while($count < 10){
                // On affiche $count
                echo $count;
        ?>
            <br>
        <?php
                // $count prend la valeur $count++ (+1)
                $count++;
            }
        ?>
        </p>
        <a href="../"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>