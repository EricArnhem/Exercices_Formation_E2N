<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 - Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 6</h1>
        <?php
            // On utilise la fonction cal_days_in_month pour calculer le nombre de jours en février 2016
            // On précise le type de calendrier, le mois et l'année
            $days = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        ?>
        <!-- On affiche le nombre de jours en février 2016 -->
        <p>Il y avait <?= $days ?> jours en Février 2016</p>
        <a href="../">Retour au menu</a>
    </body>
</html>