<?php
    // On démarre la session avant le code HTML
    session_start();
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
        <p>
            <?php
                // Si les variables sont définies
                if(isset($_SESSION['lastName']) && isset($_SESSION['firstName']) && isset($_SESSION['age'])){
                    // On les affiches
                    echo $_SESSION['lastName'] . ' ' . $_SESSION['firstName'] . ' ' . $_SESSION['age'] . ' ans';
                }
            ?>
        </p>
        <a href="index.php" id="back"><button type="button" name="button">Retour à l'exercice</button></a>
    </body>
</html>
<?php
    // Détruit les données de la session
    session_unset();
    // Destruction de la session
    session_destroy();
?>