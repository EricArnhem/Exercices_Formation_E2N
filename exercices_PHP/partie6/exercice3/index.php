<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 - Partie 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 3</h1>
        <p>
            <a href="index.php?dateDebut=2/05/2016&dateFin=27/11/2016" id="date">Afficher la date de début et de fin.</a>
        </p>
        <p>
            <?php
               // Si la date de début et de fin sont renseignées
               if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
                   // On affiche la date de début
                   echo 'La date de début est : ' . $_GET['dateDebut'];
            ?>
            <br>
            <?php
                   // et la date de fin
                   echo 'La date de fin est : ' . $_GET['dateFin'];
                 // Sinon
               } else{
                   // On affiche:
                   echo 'Les dates ne sont pas renseignées.';
               }
            ?>
        </p>
        <a href="../" id="button_menu">Retour au menu</a>
    </body>
</html>