<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 - Partie 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 6</h1>
        <p>
            <a href="index.php?batiment=12&salle=101" id="building">Afficher le bâtiment et la salle.</a>
        </p>
        <p>
            <?php
                // Si le bâtiment et la salle sont renseignés
                if(isset($_GET['batiment']) && isset($_GET['salle'])){
                    // On les affichent dans une phrase
                    echo 'La salle ' . $_GET['salle'] . ' se trouve dans le bâtiment ' . $_GET['batiment'];
                  // Sinon
                } else{
                    // On affiche:
                    echo 'Le bâtiment et la salle ne sont pas renseignés.';
                }
            ?>
        </p>
        <a href="../" id="button_menu">Retour au menu</a>
    </body>
</html>