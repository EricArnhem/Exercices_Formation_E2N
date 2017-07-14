<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
        <?php
            // On déclare la variable $isEasy à true
            $isEasy = false;
            
            // Si $isEasy == true
            if($isEasy == true){
                // On affiche 'C'est facile !!'
                echo 'C\'est facile !!';
              // Sinon
            } else{
                // On affiche 'C'est difficile !!!'
                echo 'C\'est difficile !!!';
            }
        ?>
        </p>
        <!-- Autre façon -->
        <p>
        <?php
            if($isEasy){
        ?>
        <span>C'est facile !!</span>
        <?php
            } else{
        ?>
        <span>C'est difficile !!!</span>
        <?php
            }
        ?>
        </p>
        <!-- Avec une ternaire -->
        <p>
        <?php
            echo $isEasy == true ?'C\'est facile' :'C\'est difficile !!!';
        ?>
        </p>
    </body>
</html>