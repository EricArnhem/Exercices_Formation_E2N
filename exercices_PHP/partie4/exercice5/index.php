<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 5</h1>
        <p>
        <?php
            /**
             * Fonction qui concatène un nombre et une chaîne de caractère
             * @param integer $number
             * @param string $string
             * @return string
             */
            function concatenation($number, $string){
                // On retourne la concaténation de ces deux paramètres
                return $number . $string;
            }
            // On appelle la fonction avec nos paramètres et on affiche le résultat
            echo concatenation(35, ' Bonjour');
        ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>