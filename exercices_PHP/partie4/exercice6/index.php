<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 - Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 6</h1>
        <p>
        <?php
            /**
             * // Fonction qui retourne une chaîne de caractères avec nos paramètres
             * @param string $lastName
             * @param string $firstName
             * @param integer $age
             * @return string
             */
            function getIdentity($lastName, $firstName, $age){
                return 'Bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans';
            }
            // On appelle la fonction avec nos paramètres et on affiche le résultat
            echo getIdentity('Arnhem', 'Eric', 18);
        ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>