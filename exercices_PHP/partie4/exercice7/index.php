<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7 - Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 7</h1>
        <p>
            <?php
            /**
             * Fonction qui nous dis si l'on est un homme ou une femme et si l'on est majeur ou non
             * @param integer $age
             * @param string $gender
             * @return string
             */
            function checkAgeGender($age, $gender) {
                // Si l'âge est inférieur ou égal à 0 OU que le genre est différent de 'Homme' & 'Femme'
                if ($age <= 0 || $gender != 'Homme' && $gender != 'Femme') {
                    // On retourne que c'est invalide
                    $result = 'Votre âge ou votre genre n\'est pas valide';
                  // Sinon si l'âge est >= 18 et que c'est un Homme
                } elseif ($age >= 18 && $gender == 'Homme') {
                    // On retourne:
                    $result = 'Vous êtes un homme et vous êtes majeur';
                  // Sinon si l'âge est >= 18 et que c'est une Femme
                } elseif ($age >= 18 && $gender == 'Femme') {
                    // On retourne:
                    $result = 'Vous êtes une femme et vous êtes majeure';
                  // Sinon si l'âge est < 18 et que c'est un Homme
                } elseif ($age < 18 && $gender == 'Homme') {
                    // On retourne:
                    $result = 'Vous êtes un homme et vous êtes mineur';
                  // Sinon si l'âge est < 18 et que c'est un Femme
                } elseif ($age < 18 && $gender == 'Femme') {
                    // On retourne:
                    $result = 'Vous êtes une femme et vous êtes mineure';
                }
                return $result;
            }
            // On appelle la fonction avec nos paramètres et on affiche le résultat
            echo checkAgeGender(18, 'Homme');
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>