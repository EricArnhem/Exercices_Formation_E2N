<?php
    // On initialise un tableau avec les valeurs pour le select de la civilité
    $genderList = array('Monsieur', 'Madame');
    // On déclare des variables par défaut
    $name = '';
    $firstName = '';
    $userGender = 0;
    // Récupération des données en GET ou POST
    if(isset($_POST['lastName'])){
        $name = $_POST['lastName'];
    } elseif(isset($_GET['lastName'])){
        $name = $_GET['lastName'];
    }
    // On retire tout ce qui peut être malveillant
    $name = strip_tags($name);
    if(isset($_POST['firstName'])){
        $firstName = $_POST['firstName'];
    } elseif(isset($_GET['firstName'])){
        $firstName = $_GET['firstName'];
    }
    // On retire tout ce qui peut être malveillant
    $firstName = strip_tags($firstName);
    if(isset($_POST['civility'])){
        $userGender = $_POST['civility'];
    } elseif(isset($_GET['civility'])){
        $userGender = $_GET['civility'];
    }
    // On retire tout ce qui peut être malveillant
    $userGender = strip_tags($userGender);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 - Partie 7</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 6</h1>  
        <?php
            if($name != '' || $firstName != ''){
                ?>
                <p>Bonjour <?= $genderList[$userGender]; ?> <?= $name; ?> <?= $firstName; ?></p>
        <?php
            }else{
        ?>
        <p>Veuillez inscrire vos informations:</p>
        <form action="index.php" method="POST">
            <div>
                <select name="civility">
                    <?php
                    // On génère les options en allant chercher les données dans le tableau $genderList
                    foreach ($genderList as $key => $gender){ ?>
                    <option value="<?= $key; ?>"><?= $gender; ?></option>
                    <?php 
                    }
                    ?>
                </select>
                <input type="text" name="lastName" placeholder="Nom"><input type="text" name="firstName" placeholder="Prénom"><br>
                <input type="submit" value="Valider">
            </div>
        </form>
        <?php
            }
        ?>
    <a href="../">Retour au menu</a>
</body>
</html>