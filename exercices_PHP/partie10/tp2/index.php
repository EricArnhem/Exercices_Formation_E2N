<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 2 - Partie 10</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>TP 2</h1>
        <form action="index.php" method="post">
            <label for="civility">Civilité:</label>
            <select name="civility">
                <option value="Homme" 
                    <?php
                        // Si la valeur existe et qu'elle est égale à 'Homme', on ajoute 'selected' en attribut
                        if(isset($_POST['civility']) && $_POST['civility'] == 'Homme'){echo 'selected';}
                    ?>>Homme
                </option>
                <option value="Femme" 
                    <?php
                        // Si la valeur existe et qu'elle est égale à 'Femme', on ajoute 'selected' en attribut
                        if(isset($_POST['civility']) && $_POST['civility'] == 'Femme'){echo 'selected';}
                    ?>>Femme
                </option>
            </select><br>
            <label for="lastName">Nom:</label><input type="text" name="lastName" placeholder="Nemare" value="<?php if(isset($_POST['lastName'])){echo $_POST['lastName'];}?>"><br>
            <label for="firstName">Prénom:</label><input type="text" name="firstName" placeholder="Jean" value="<?php if(isset($_POST['firstName'])){echo $_POST['firstName'];}?>"><br>
            <label for="age">Age:</label><input type="text" name="age" placeholder="34" value="<?php if(isset($_POST['age'])){echo $_POST['age'];}?>"><br>
            <label for="company">Société:</label><input type="text" name="company" placeholder="Tesla" value="<?php if(isset($_POST['company'])){echo $_POST['company'];}?>"><br>
            <input type="submit" value="Valider">
        </form>
        <?php
            $regex_name = '#^\D+[-]?\D+#i';
            $regex_age = '#[1-100]#';
            // Si toutes les valeurs existent
            if(isset($_POST['civility']) && isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['age']) && isset($_POST['company'])){
                if(preg_match($regex_name, $_POST['lastName']) && preg_match($regex_name, $_POST['firstName']) && preg_match($regex_age, $_POST['age']) && preg_match($regex_name, $_POST['company'])){
        ?>
                <!-- On affiche les valeurs -->
                <p>Civilité: <?= strip_tags($_POST['civility']) ?></p>
                <p>Nom: <?= strip_tags($_POST['lastName']) ?></p>
                <p>Prénom: <?= strip_tags($_POST['firstName']) ?></p>
                <p>Age: <?= strip_tags($_POST['age']) ?></p>
                <p>Société : <?= strip_tags($_POST['company']) ?></p>
        <?php
                }
            }
        ?>
        <a href="../">Retour au menu</a>
    </body>
</html>