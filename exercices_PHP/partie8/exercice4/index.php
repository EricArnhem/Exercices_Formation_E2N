<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 4</h1>
        <p>
            <?php
                // Si les cookies existent
                if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
                    // On affiche le login venant du cookie
                    echo 'Login: ' . $_COOKIE['login'];
            ?>
            <br>
            <?php
                    // On affiche le mot de passe venant du cookie
                    echo 'Mot de passe: ' . $_COOKIE['password'];
                }
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>