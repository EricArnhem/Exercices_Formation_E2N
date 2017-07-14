<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 - Partie 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 5</h1>
        <p>
            <a href="index.php?semaine=12" id="week">Afficher le langage et le serveur.</a>
        </p>
        <p>
            <?php
                // Si la semaine est renseignée
                if(isset($_GET['semaine'])){
                    // On affiche la semaine dans une phrase
                    echo 'Nous sommes à la semaine ' . $_GET['semaine'];
                  // Sinon
                } else{
                    // On affiche:
                    echo 'La semaine n\'est pas renseignée';
                }
            ?>
        </p>
        <a href="../" id="button_menu">Retour au menu</a>
    </body>
</html>