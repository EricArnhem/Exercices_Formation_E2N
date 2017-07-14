<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 4</h1>
        <p>
        <?php
            // On déclare une fonction compare() qui prend en paramètres 2 nombres et les compares
            function compare($firstNumber, $secondNumber){
                // On initialise $result
                $result = '';
                // Si le 1er nombre est plus grand que le 2e
                if($firstNumber > $secondNumber){
                    // $result prend la valeur:
                    $result = 'Le premier nombre est plus grand';
                  // Si le 1er nombre est plus petit que le 2e
                } elseif($firstNumber < $secondNumber){
                    // $result prend la valeur:
                    $result = 'Le premier nombre est plus petit';
                  // Si les 2 nombres sont égaux
                } elseif($firstNumber == $secondNumber){
                    // $result prend la valeur:
                    $result = 'Les deux nombres sont identiques';
                }
                // On retourne $result
                return $result;
            }
            // $result prend la valeur de ce que retourne la fonction
            $result = compare(150, 100);
            // On affiche cette valeur
            echo $result;
        ?>
        </p>
        <a href="../" title="Retour au menu">Retour au menu</a>
    </body>
</html>