<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8 - Partie 5</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 8</h1>
        <p>
            <?php
                // On crée le tableau $months en ajoutant les mois dans son contenu
                $months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                // Pour chaque ligne dans le tableau $months
                foreach($months as $month){
                    // On affiche la valeur du mois
                    echo $month;
            ?>
            <br>
            <?php
                }
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>