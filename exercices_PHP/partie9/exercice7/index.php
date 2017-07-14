<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7 - Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 7</h1>
        <p>
        <?php
            //On affiche la date du jour (format JJ-MM-AAAA)) et on rajoute 20 jours
            echo date('d-m-Y', strtotime('+20 days'));
        ?>
        <?php
            /* Méthode avec les timestamps
            // On initialise la variable $date avec la date du jour
            $date = date('d-m-Y');
            // On converti cette date en timestamp
            $timestamp = strtotime($date);
            // On ajoute 1728000 à ce timestamp car il y a 86400s dans une journée et 86400 * 20 = 1728000
            $timestamp2 = $timestamp + 1728000;
            // On converti le timestamp en date
            $date2 = date('d-m-Y', $timestamp2);
            // On affiche la date
            echo $date2;
            */
        ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>