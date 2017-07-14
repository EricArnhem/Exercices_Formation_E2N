<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 5</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 4</h1>
        <p>
            <?php
                // On crée le tableau $mois en ajoutant les mois dans son contenu
                $months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                // On modifie la valeur de 'Aout' en 'Août' en le selectionnant grâce à son index
                $months[7] = 'Août';
                // On affiche la valeur de l'index 7 modifiée au dessus
                echo $months[7];
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>