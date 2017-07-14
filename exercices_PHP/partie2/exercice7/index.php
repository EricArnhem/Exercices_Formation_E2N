<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7 - Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
        <?php
           // On déclare la variable $maVariable à false
           $maVariable = false;
           // Si $maVariable == false
           if($maVariable == false){
               // On affiche:
               echo 'C\'est pas bon !!!';
             // Sinon
           } else{
               // On affiche:
               echo 'c\'est ok !!';
           }
        ?>
        </p>
    </body>
</html>