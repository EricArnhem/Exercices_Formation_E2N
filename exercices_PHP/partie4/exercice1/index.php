<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1 - Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 1</h1>
        <p>
        <?php
            // On crée une fonction returnTrue() 
            function returnTrue(){
                // Cette fonction retourne true
                return true;
            }
            // $result prend la valeur du retour de la fonction
            $result = returnTrue();
            // On affiche cette valeur
            echo 'La fonction retourne: ' . $result;
        ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>