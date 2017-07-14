<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8 - Partie 7</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Exercice 8</h1>
        <p>
            <?php
            // Si les informations sont définies et que le fichier a bien été envoyé
            if(isset($_POST['civility']) && isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_FILES['myFile']) && $_FILES['myFile']['error'] == 0){
                // On stocke les informations du fichier dans une tableau $fileInfos
                $fileInfos = pathinfo($_FILES['myFile']['name']);
                // L'extension du fichier est stockée dans $fileExtension
                $fileExtension = $fileInfos['extension'];
                // Le nom du fichier est stocké dans $fileName
                $fileName = $fileInfos['filename'];
                // On affiche les informations dans une phrase
                echo 'Bonjour ' . strip_tags($_POST['civility']) . '. ' . strip_tags($_POST['lastName']) . ' ' . strip_tags($_POST['firstName']);
            ?>
            <br>
            <?php
                // Si l'extension du fichier est dans le tableau des extensions autorisées
                if($fileExtension == 'pdf'){
                    // On affiche le nom et le type du fichier
                    echo 'Votre ficher du nom de ' . $fileName . ' est de type ' . $fileExtension;
                  // Sinon
                } else {
                    // On affiche que le type du fichier n'est pas valide
                    echo 'Le type de votre fichier n\'est pas valide';
                }
              // Sinon
            } else{?>
                <!-- On affiche le formulaire -->
                <p>Veuillez inscrire vos informations:</p>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div>
                        <select name="civility">
                            <option value="Mr">Mr</option>
                            <option value="Mme">Mme</option>
                        </select>
                        <input type="text" name="lastName" placeholder="Nom">
                        <input type="text" name="firstName" placeholder="Prénom"><br>
                        <input type="file" name="myFile"><br>
                        <input type="submit" value="Valider">
                    </div>
                </form>
            <?php
            }
            ?>
        </p>
        <a href="../">Retour au menu</a>
    </body>
</html>