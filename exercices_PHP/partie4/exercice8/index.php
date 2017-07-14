<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8 - Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 8</h1>
        <p>
            <?php
                /**
                 * Fonction qui prend 3 nombres et calcule la somme de ceux-ci
                 * @param int $firstNumber
                 * @param int $secondNumber
                 * @param int $thirdNumber
                 * @return int
                 */
                function sum($firstNumber = 0, $secondNumber = 0, $thirdNumber = 0){
                    return $firstNumber + $secondNumber + $thirdNumber;
                }
                // On appelle la fonction et on affiche ce qu'elle retourne
                echo 'Somme des nombres: ' . sum(12, 75, 38);
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>