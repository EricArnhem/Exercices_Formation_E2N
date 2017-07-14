<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ancien Calendrier</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Calendrier (Ancien)</h1>
        <form action="index.php" method="post">
            <!-- Liste déroulante des mois -->
            <select name="months" id="months">
                <?php
                    // Initialisation du tableau des mois
                    $monthsArray = array(
                        '1' => 'Janvier',
                        '2' => 'Février',
                        '3' => 'Mars',
                        '4' => 'Avril',
                        '5' => 'Mai',
                        '6' => 'Juin',
                        '7' => 'Juillet',
                        '8' => 'Août',
                        '9' => 'Septembre',
                        '10' => 'Octobre',
                        '11' => 'Novembre',
                        '12' => 'Décembre',
                    );
                    // Variable qui ajoutera l'attribut selected au mois choisi
                    $selected = '';
                    // Parcours du tableau
                    // Pour chaque ligne du tableau $monthsArray on stocke la valeur de cette ligne dans $monthName
                    foreach ($monthsArray as $monthValue => $monthName) {
                        // Si le mois choisi est égal à la valeur du mois
                        if ($_POST['months'] == $monthValue) {
                            // Il prend l'attribut selected
                            $selected = ' selected';
                        } ?>
                        <!-- On affiche la ligne avec les bonnes valeurs -->
                        <option value="<?= $monthValue;?>" <?= $selected;?>><?= $monthName;?></option>
                        <?php
                        // Remise à zéro de $selected
                        $selected = '';
                    }
                ?>
            </select>

            <!-- Liste déroulante des années -->
            <select name="years" id="years">
                <?php
                    // Variable qui ajoutera l'attribut selected à l'année choisie
                    $selected = '';
                    // Parcours du tableau
                    // Pour $i allant de 1900 à 2030, on ajoute 1 à $i à chaque passage dans la boucle
                    for ($year = 1900; $year <= 2030; $year++) {
                        // Si l'année choisie est égale à $i
                        if ($_POST['years'] == $year) {
                            // On ajoute l'attribut selected
                            $selected = ' selected';
                        } ?>
                        <!-- On affiche la ligne -->
                        <option value="<?= $year;?>" <?= $selected;?>><?= $year;?></option>
                        <?php
                        // Remise à zéro de $selected
                        $selected = '';
                    }
                ?>
            </select>
            <input type="submit" value="Valider">
        </form>
        <?php
            setlocale (LC_TIME, 'fr_FR.utf8','fra');
            function build_calendar($month, $year) {
                // On crée un tableau contenant les noms des jours de la semaine.
                $daysOfWeek = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');

                // Quel est le premier jour du mois en question ?
                // mktime() créer un timestamp UNIX correspondant aux arguments fournis
                $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

                // Combien de jour le mois contient t-il ?
                $numberDays = date('t', $firstDayOfMonth);

                // On récupère des informations sur le premier jour du mois en question.
                $dateComponents = getdate($firstDayOfMonth);

                // Quel est la valeur de l'index du jour du premier mois en question ?
                $dayOfWeek = $dateComponents['wday'] - 1;
                // Pour que le calendrier commence un Lundi
                if ($dayOfWeek < 0) {
                    $dayOfWeek = 6;
                }
                // On crée la balise de début du table ainsi que le caption qui affiche le mois et l'année
                $calendar = "<table class='calendar'>";
                // .= permet de concaténer rapidement comme les += qui ajoute rapidement
                $calendar .= '<caption>' . ucfirst(strftime('%B', $dateComponents[0])) . ' ' . $year . '</caption>';
                $calendar .= '<tr>';

                // On crée le header du calendrier avec les jours de la semaine
                foreach ($daysOfWeek as $day) {
                    $calendar .= "<th class='header'>$day</th>";
                }

                // On crée le reste du calendrier
                // On initialise le compteur de jours, en commençant par 1
                $currentDay = 1;

                // On ferme puis re-ouvre une ligne du tableau (balise <tr>)
                $calendar .= '</tr><tr>';

                // La variable $dayOfWeek sert à s'assurer que le tableau comporte bien 7 colonnes
                // Si $dayOfWeek > 0
                if ($dayOfWeek > 0) {
                    // On ajoute une colonne qui fera la largeur des jours manquants
                    $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
                }

                // Tant que le compteur de jours est inférieur ou égal au nombre de jours dans le mois
                while ($currentDay <= $numberDays) {
                    // Si le jour de le semaine atteint 7 (la ligne atteint 7 colonnes)
                    if ($dayOfWeek == 7) {
                        // On remet la valeur de $dayOfWeek à 0
                        $dayOfWeek = 0;
                        // On crée une autre ligne
                        $calendar .= '</tr><tr>';
                    }
                    // On ajoute une colonne avec le numéro du jour au calendrier
                    $calendar .= "<td class='day'>$currentDay</td>";

                    // On ajoute 1 au numéro du jour et au jour de la semaine
                    $currentDay++;
                    $dayOfWeek++;
                }

                // Complète la ligne de la dernière semaine du mois si nécessaire
                // Si le nombre de jour de la semaine est différent de 7
                if ($dayOfWeek != 7) {
                    // On calcule le nombre de jours restants et on stocke ce nombre dans une variable
                    $remainingDays = 7 - $dayOfWeek;
                    // On ajoute une colonnes qui fait la taille des jours manquants
                    $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
                }
                // On ferme la balise <tr> (la ligne)
                $calendar .= '</tr>';
                // On ferme le tableau
                $calendar .= '</table>';
                // On retourne le calendrier complété
                return $calendar;
            }
        ?>
        <?php
            // Si les variables du mois et de l'année existent
            if (isset($_POST['months']) && isset($_POST['years'])) {
                // $month prend la valeur du mois
                $month = $_POST['months'];
                // $year prend la valeur de l'année
                $year = $_POST['years'];
                // On contruit le tableau avec la fonction
                echo build_calendar($month, $year);
            }
        ?>
        <a href="../"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>
