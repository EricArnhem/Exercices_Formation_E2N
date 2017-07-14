<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 - Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
        <?php
            // On déclare les variables
            $age = 18;
            $genre = 'Homme';
            // Si l'âge est inférieur ou égal à 0 OU que le genre est différent de 'Homme' & 'Femme'
            if($age <= 0 || $genre != 'Homme' && $genre != 'Femme'){
                // On affiche que c'est invalide
                echo 'Votre âge ou votre genre n\'est pas valide';
              // Sinon si l'âge est >= 18 et que c'est un Homme
            } else if($age >= 18 && $genre == 'Homme'){
                // On affiche:
                echo 'Vous êtes un homme et vous êtes majeur';
              // Sinon si l'âge est >= 18 et que c'est une Femme
            } else if($age >= 18 && $genre == 'Femme'){
                // On affiche:
                echo 'Vous êtes une femme et vous êtes majeure';
              // Sinon si l'âge est < 18 et que c'est un Homme  
            } else if($age < 18 && $genre == 'Homme'){
                // On affiche:
                echo 'Vous êtes un homme et vous êtes mineur';
              // Sinon si l'âge est < 18 et que c'est un Femme  
            } else if($age < 18 && $genre == 'Femme'){
                // On affiche:
                echo 'Vous êtes une femme et vous êtes mineure';
            }
        ?>
        </p>
    </body>
</html>