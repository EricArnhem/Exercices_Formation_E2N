<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1 - Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 1</h1>
        <p>
            <?php
                // On affiche le User Agent en recherchant dans $_SERVER une ligne qui contient la clé HTTP_USER_AGENT
                echo 'User Agent: ' . $_SERVER['HTTP_USER_AGENT'];
            ?>
            <br>
            <?php
                // On affiche l'IP du client en recherchant dans $_SERVER une ligne qui contient la clé REMOTE_ADDR
                echo 'IP client: ' . $_SERVER['REMOTE_ADDR'];
            ?>
            <br>
            <?php
                // On affiche le nom du serveur en recherchant dans $_SERVER une ligne qui contient la clé SERVER_NAME
                echo 'Nom du serveur: ' . $_SERVER['SERVER_NAME'];
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>