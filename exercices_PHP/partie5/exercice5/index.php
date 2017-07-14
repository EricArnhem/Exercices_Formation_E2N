<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 5</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 5</h1>
        <p>
            <?php
                // On crée le tableau $departements en ajoutant les départements des Hauts de France
                $departements = array (
                    '02' => 'Aisne',
                    '59' => 'Nord',
                    '60' => 'Oise',
                    '62' => 'Pas-de-Calais',
                    '80' => 'Somme');
                // On affiche le type de la variable $departements avec gettype
                echo var_dump($departements);
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>