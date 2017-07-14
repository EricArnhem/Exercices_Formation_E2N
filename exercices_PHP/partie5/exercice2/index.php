<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - Partie 5</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 2</h1>
        <p>
            <?php
                // On crée le tableau $mois en ajoutant les mois dans son contenu
                $months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                // On affiche la 3e ligne du tableau
                echo $months[2];
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>