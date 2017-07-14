<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1 - Partie 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 1</h1>
        <p>
            <a href="index.php?nom=Nemare&prenom=Jean" id="hello">Dis-moi bonjour !</a>
        </p>
        <p>
            <?php
                // Si le nom et le prénom sont renseignés
                if(isset($_GET['prenom']) && isset($_GET['nom'])){
                    // On les affichent dans une phrase
                    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
                  // Sinon
                } else{
                    // On affiche qu'ils ne sont pas renseignés
                    echo 'Le nom et prénom ne sont pas renseignés';
                }
            ?>
        </p>
        <a href="../" id="button_menu">Retour au menu</a>
    </body>
</html>