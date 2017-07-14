<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 10 - Partie 5</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 10</h1>
        <p>
            <?php
            // On crée le tableau $departments en ajoutant les départements des Hauts de France
            $departments = array(
                '02' => 'Aisne',
                '59' => 'Nord',
                '60' => 'Oise',
                '62' => 'Pas-de-Calais',
                '80' => 'Somme');
            /* La boucle foreach va parcourir toutes les lignes du tableau et stocker les index dans la variable
              $departmentNumber et la valeur dans la variable $departmentName */
            foreach($departments as $departmentNumber => $departmentName) {
                // On affiche la phrase avec les bonnes valeurs pour chaque ligne du tableau
                echo 'Le département ' . $departmentName . ' a le numéro ' . $departmentNumber;
                ?>
                <br>
                <?php
            }
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>