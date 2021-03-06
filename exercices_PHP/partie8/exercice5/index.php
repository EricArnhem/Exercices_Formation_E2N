<?php
    // Si les informations sont reiseignées
    if(isset($_POST['login']) && isset($_POST['password'])){
        // On écrases les cookies de l'exercice 3 avec les données du formulaire
        setcookie('login', $_POST['login'], time() + 365*24*3600, '/', null, false, true);
        setcookie('password', $_POST['password'], time() + 365*24*3600, '/', null, false, true);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 5</h1>
        <form action="index.php" method="POST">
            <p><label for="login">Login: </label><input type="text" name="login" placeholder="Nom d'utilisateur"></p>
            <p><label for="password">Mot de passe: </label><input type="text" name="password" placeholder="Mot de passe"></p>
            <p><input type="submit" value="Valider"></p>
        </form>
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