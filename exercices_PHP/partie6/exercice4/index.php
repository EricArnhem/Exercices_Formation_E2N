<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 4</h1>
        <p>
            <a href="index.php?langage=PHP&serveur=LAMP" id="languages">Afficher le langage et le serveur.</a>
        </p>
        <p>
            <?php
            // Si le langage et le serveur sont renseignés
            if (isset($_GET['langage']) && isset($_GET['serveur'])) {
                // On les affichent dans une phrase
                echo 'Le langage est ' . $_GET['langage'] . ' sur un serveur ' . $_GET['serveur'];
                // Sinon
            } else {
                // On affiche:
                echo 'Le langage est le serveur ne sont pas renseignés';
            }
            ?>
        </p>
        <a href="../" id="button_menu">Retour au menu</a>
    </body>
</html>