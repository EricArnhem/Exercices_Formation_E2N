<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 - Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 3</h1>
        <p>
        <?php
            // On crée une fonction returnStrings qui prend 2 chaînes de caractères en paramètres
            function returnStrings($firstString, $secondString){
                // Cette fonction retourne la concaténation de ces 2 chaînes
                return $firstString . $secondString;
            }
            // $result prend la valeur de ce que retourne la fonction
            $result = returnStrings('Salut ', 'Bobo');
            // On affiche $result
            echo $result;
        ?>
        </p>
        <a href="../" title="Retour au menu">Retour au menu</a>
    </body>
</html>