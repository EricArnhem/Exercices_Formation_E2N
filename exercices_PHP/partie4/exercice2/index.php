<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 2</h1>
        <p>
        <?php
            // On crée une fonction returnString() qui prend en paramètre une chaîne de caractères
            function returnString ($myString){
                // On retourne la chaîne de caractères
                return $myString;
            }
            // $result prend la valeur que retourne la fonction
            $result = returnString('Coucou !');
            // On affiche cette valeur
            echo $result;
        ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>