<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - Partie 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 2</h1>
        <p>
            <a href="index.php?nom=Nemare&prenom=Jean" id="age">Afficher l'âge.</a>
        </p>
        <p>
            <?php
               // Si l'âge est renseigné
               if(isset($_GET['age'])){
                   // On l'affiche
                   echo $_GET['age'];
                 // Sinon
               } else{
                   // On affiche:
                   echo 'L\'âge n\'est pas renseigné.';
               }
            ?>
        </p>
        <a href="../" id="button_menu">Retour au menu</a>
    </body>
</html>