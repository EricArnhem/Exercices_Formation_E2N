<?php
// On démarre la session avant le code HTML
session_start();
// On créer des variables de session dans $_SESSION
$_SESSION['lastName'] = 'Arnhem';
$_SESSION['firstName'] = 'Eric';
$_SESSION['age'] = 18;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2 - Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 2</h1>
        <a href="display.php"><button type="button" id="display">Lien vers la page d'affichage</button></a>
        <a href="../" id="back"><button type="button" name="button">Retour au menu</button></a>
    </body>
</html>
<?php
    // On ferme la session en enregistrant les données
    session_write_close();
?>