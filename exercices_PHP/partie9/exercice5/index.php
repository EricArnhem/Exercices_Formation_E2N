<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 5</h1>
        <p>
        <?php
            // On instancie la classe DateTime en créant un objet $datetime1
            $datetime1 = new DateTime('2016-05-16');
            // On instancie la classe DateTime en créant un objet $datetime2
            $datetime2 = new DateTime();
            // On utilise la méthode de DateTime qui fait la différence entre les deux dates en stockant le résultat dans l'objet $diff
            $diff = $datetime2->diff($datetime1);
            // On affiche la différence de jours 
            echo $diff->format('Nombre de jours depuis le 16 mai 2016: %a jours');
        ?>
        <?php
            /* -- Autre façon ---
            // On initialise la variable $todayDate avec la date et l'heure d'aujourd'hui
            $todayDate = new DateTime();
            // On formate la date au format U (timestamp Unix) et on la stocke dans la variable $todayTimestamp
            $todayTimestamp = $todayDate->format('U');
            // On initialise la variable $oldDate avec la date et l'heure du 16 mai 2016
            $oldDate = new DateTime('2016-05-16');
            // On formate la date au format U (timestamp Unix) et on la stocke dans la variable $oldTimestamp
            $oldTimestamp = $oldDate->format('U');
            // On calcule la différence entre les 2 dates (timestamps) et on la stocke dans la variable $newTimestamp
            $newTimestamp = $todayTimestamp - $oldTimestamp;
            // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
            // On divise cette valeur par 86400  car 60*60*24 = 86 400
            $daysCount = $newTimestamp / 86400;
            // On affiche le nombres de jours
            echo 'Nombre de jours depuis le 16 mai 2016: ' . round($daysCount) . ' jours';
            */
        ?>
        <?php
            /* -- Autre façon --
            //date fr le 16 mai 2016
            $date1 = "16-05-2016"; 
            // date courante
            $date2 = date("j-m-Y"); 
            // On transforme les 2 dates en timestamp
            $date3 = strtotime($date1);
            $date4 = strtotime($date2);

            // On récupère la différence de timestamp entre les 2 précédents
            $nbJoursTimestamp = $date4 - $date3;

            // ** Pour convertir le timestamp (exprimé en secondes) en jours **
            // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
            $nbJours = $nbJoursTimestamp / 86400; // 86 400 = 60*60*24
            // On affiche le nombre de jours
            echo "Nombre de jours : " . $nbJours;
             */
        ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>