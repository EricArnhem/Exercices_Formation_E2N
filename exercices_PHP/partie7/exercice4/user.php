<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 7</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 4</h1>
        <p>
            <?php
                // On affiche une phrase avec les informations du formulaire
                echo 'Bonjour ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']) . ' !';
            ?>
        </p>
        <a href="index.php">Retour à l'exercice</a>
    </body>
</html>