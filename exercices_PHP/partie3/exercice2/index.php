<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - Partie 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 2</h1>
        <p>
        <?php
            // On déclare les variables
            $firstVar = 0;
            $secondVar = 65;
            // Tant que $firstVar < 20
            while($firstVar < 20){
                // On affiche le résultat de $firstVar * $secondVar
                echo $firstVar * $secondVar;
        ?>
            <br>
        <?php
                // $firstVar prend la valeur $firstVar++ (+1)
                $firstVar++;
            }
        ?>
        </p>
        <a href="../"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>