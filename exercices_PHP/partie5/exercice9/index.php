<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 9 - Partie 5</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 9</h1>
        <p>
            <?php
                // On crée le tableau $departments en ajoutant les départements des Hauts de France
                $departments = array(
                    '02' => 'Aisne',
                    '59' => 'Nord',
                    '60' => 'Oise',
                    '62' => 'Pas-de-Calais',
                    '80' => 'Somme');
                /* Pour chaque ligne du tableau, la boucle foreach va stocker sa valeur dans la variable $element et
                l'affichée à chaque passage dans la boucle */
                foreach($departments as $dep){
                    echo $dep;
            ?>
            <br>
            <?php
                }
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>