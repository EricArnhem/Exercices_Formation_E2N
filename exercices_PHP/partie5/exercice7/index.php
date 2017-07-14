<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7 - Partie 5</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 7</h1>
        <p>
            <?php
                // On crée le tableau $departments en ajoutant les départements des Hauts de France
                $departments = array(
                    '02' => 'Aisne',
                    '59' => 'Nord',
                    '60' => 'Oise',
                    '62' => 'Pas-de-Calais',
                    '80' => 'Somme');
                // On ajoute le département de la Marne avec l'index 51
                $departments['51'] = 'Marne';
                // On affiche la valeur de l'index 51
                echo $departments['51'];
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>