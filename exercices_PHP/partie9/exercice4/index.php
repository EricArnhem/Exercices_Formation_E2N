<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 4</h1>
        <!-- On affiche le timestamp du jour -->
        <p>Timestamp du jour: <?= mktime() ?></p>
        <!-- On affiche le timestamp du mardi 2 août 2016 (hh:mm:ss  mm/jj/aaaa) -->
        <p>Timestamp du mardi 2 août 2016: <?= mktime(15, 0, 0, 8, 2, 2016) ?></p>
        <a href="../">Retour au menu</a>
    </body>
</html>