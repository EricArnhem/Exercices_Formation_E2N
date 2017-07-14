<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 - Partie 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 3</h1>
        <p>
        <?php
            // On déclare les variables
            $firstVar = 100;
            $secondVar = 38;
            // Tant que $firstVar >= 10
            while($firstVar >= 10){
                // On affiche le résultat de $firstVar * $secondVar
                echo $firstVar * $secondVar;
        ?>
            <br>
        <?php
                // $firstVar prend la valeur $firstVar++ (+1)
                $firstVar--;
            }
        ?>
        </p>
        <a href="../"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>