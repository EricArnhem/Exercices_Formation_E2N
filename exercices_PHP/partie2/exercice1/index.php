<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1 - Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
        <?php
            // On déclare la variable $age qui prend en valeur un nombre entier
            $age = 18;
            // Si l'âge est supérieur à 18
            if($age >= 18){
                // On affiche:
                echo 'Vous êtes majeur';
              // Sinon si l'âge est inférieur ou égal à 0
            } else if($age <= 0){
                // On affiche:
                echo 'Vous n\'existez pas encore';
              // Sinon
            } else{
                // On affiche:
                echo 'Vous êtes mineur';
            }
        ?>
        </p>
    </body>
</html>