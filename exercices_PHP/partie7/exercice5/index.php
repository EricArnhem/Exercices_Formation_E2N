<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 7</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 5</h1>
        <p>Veuillez inscrire vos informations:</p>
        <form action="index.php" method="POST">
            <div>
                <select name="civility">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <input type="text" name="lastName" placeholder="Nom">
                <input type="text" name="firstName" placeholder="Prénom"><br>
                <input type="submit" value="Valider">
            </div>
        </form>
        <p>
            <?php
            // Si les informations sont définies
            if (isset($_POST['civility']) && isset($_POST['lastName']) && isset($_POST['firstName'])) {
                // On les affiche dans une phrase (strip_tags() sert à éviter de pouvoir envoyer directement du code)
                echo 'Bonjour ' . strip_tags($_POST['civility']) . '. ' . strip_tags($_POST['lastName']) . ' ' . strip_tags($_POST['firstName']);
            }
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>