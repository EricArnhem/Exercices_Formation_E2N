<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4 - Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>
            <?php
            // On déclare la variable $magnitude
            $magnitude = 9;
            echo 'Si la magnitude vaut ' . $magnitude;
            ?>
        </h1>
        <p>
            <?php
            // On indique la variable à tester
            switch ($magnitude) {
                // Quand la magnitude vaut 1
                case 1:
                    echo 'Micro-séisme impossible à ressentir.';
                    break;
                // Quand la magnitude vaut 2
                case 2:
                    echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                    break;
                // Quand la magnitude vaut 3
                case 3:
                    echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                    break;
                // Quand la magnitude vaut 4
                case 4:
                    echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                    break;
                // Quand la magnitude vaut 5
                case 5:
                    echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                    break;
                // Quand la magnitude vaut 6
                case 6:
                    echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                    break;
                // Quand la magnitude vaut 7
                case 7:
                    echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                    break;
                // Quand la magnitude vaut 8
                case 8:
                    echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                    break;
                // Quand la magnitude vaut 9
                case 9:
                    echo 'Séisme capable de tout détruire sur une très vaste zone.';
                    break;

                default:
                    echo 'Cette valeur n\'est pas sur l\'échelle de Richter';
                    break;
            }
            ?>
        </p>
    </body>
</html>