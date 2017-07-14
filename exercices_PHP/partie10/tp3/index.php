<?php
    // On initialise les tableaux
    $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

    // Fonction qui va afficher les données des tableaux
    function displayArray($array) {
        // La variable $result prend la valeur des différentes données du tableau 
        $result = $array['name'] . ' ' . $array['firstname'] . '<img src="' . $array['portrait'] . '"' . ' width="200px;" alt="' . $array['firstname'] . '" title="' . $array['name'] . ' ' . $array['firstname'] . '">';
        // On retourne la variable $result
        return $result;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 3 - Partie 10</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>TP 3</h1>
        <p><?= displayArray($portrait1); ?></p>
        <p><?= displayArray($portrait2); ?></p>
        <p><?= displayArray($portrait3); ?></p>
        <p><?= displayArray($portrait4); ?></p>
        <a href="../">Retour au menu</a>
    </body>
</html>