<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 1 - Partie 10</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>TP 1</h1>
            <?php
                // On initialise les variables des regex
                $regex_name = '/^[a-z]{2,30}$/i';
                $regex_birthdate = '/(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.]((?|19|20)\d\d)/';
                $regex_phone = '/([0]{1})([1-9]{1})*[-. (]*(([0-9]{2})[. ]?){4}|(\+)([3]{2})*[-. (]*([1-9]{1})*[-. (]*(([0-9]{2})[. ]?){4}|([0]{2})*[-. (]*([3]{2})*[-. (]*([1-9]{1})*[-. (]*(([0-9]{2})[. ]?){4}/';
                $regex_nationality = '#[\p{L}\s]+/';
                $regex_badge = '/[1-1000]/';
                $regex_codecademy = '/[https:\/\/www.codecademy.com\/].+$/';
                // Si les valeurs sont définies
                if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['birthDate']) && isset($_POST['birthCountry']) && isset($_POST['nationality']) && isset($_POST['adress']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['degree']) && isset($_POST['poleEmploiNumber']) && isset($_POST['badgeCount']) && isset($_POST['codecademyLink']) && isset($_POST['superHero']) && isset($_POST['hack']) && isset($_POST['experience'])){
                    // Et si elles sont conformes aux regex
                    if(preg_match($regex_name, $_POST['firstName']) && preg_match($regex_name, $_POST['lastName']) && preg_match($regex_birthdate, $_POST['birthDate']) && preg_match($regex_phone, $_POST['phone']) && preg_match($regex_name, $_POST['birthCountry']) && preg_match($regex_nationality, $_POST['nationality']) && preg_match($regex_badge, $_POST['badgeCount']) && preg_match($regex_codecademy, $_POST['codecademyLink'])){
                        // On les affiches
                        echo strip_tags($_POST['lastName']) ?> <br> <?= strip_tags($_POST['firstName']) ?> <br> <?= strip_tags($_POST['birthDate']) ?> <br> <?= strip_tags($_POST['birthCountry']) ?> <br> <?= strip_tags($_POST['nationality']) ?> <br> <?= strip_tags($_POST['adress']) ?> <br> <?= strip_tags($_POST['email']) ?> <br> <?= strip_tags($_POST['phone']) ?> <br> <?= strip_tags($_POST['degree']) ?> <br> <?= strip_tags($_POST['poleEmploiNumber']) ?> <br> <?= strip_tags($_POST['badgeCount']) ?> <br> <?= strip_tags($_POST['codecademyLink']) ?> <br> <?= strip_tags($_POST['superHero']) ?> <br> <?= strip_tags($_POST['hack']) ?> <br> <?= strip_tags($_POST['experience']);
                      // Sinon on affiche que les infos ne sont pas valides
                    } else{ ?>
                        <p>Les informations sont invalides</p>
                    <?php
                    }
                  // Sinon  
                } else{ ?>
                    <!-- On affiche le formulaire -->
                    <h2>Veuillez remplir les informations :</h2>
                    <form action="index.php" method="post">
                        <label for="lastName">Nom:</label><input type="text" name="lastName" placeholder="Nemare" required><br>
                        <label for="firstName">Prénom:</label><input type="text" name="firstName" placeholder="Jean" required><br>
                        <label for="birthDate">Date de naissance:</label><input type="text" name="birthDate" placeholder="01/12/2010" required><br>
                        <label for="birthCountry">Pays de naissance:</label><input type="text" name="birthCountry" placeholder="France" required><br>
                        <label for="nationality">Nationalité:</label><input type="text" name="nationality" placeholder="Français" required><br>
                        <label for="adress">Adresse:</label><input type="text" name="adress" placeholder="123 rue bidon" required><br>
                        <label for="email">Email:</label><input type="email" name="email" placeholder="email@test.com" required><br>
                        <label for="phone">Téléphone:</label><input type="text" name="phone" placeholder="06.48.15.48.15" required><br>
                        <label for="degree">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur):</label><input type="text" name="degree" placeholder="sans, Bac, Bac+2, Bac+3 ou supérieur" required><br>
                        <label for="poleEmploiNumber">Numéro pôle emploi:</label><input type="text" name="poleEmploiNumber" required><br>
                        <label for="badgeCount">Nombre de badge:</label><input type="text" name="badgeCount" placeholder="15" required><br>
                        <label for="codecademyLinks">Liens codecademy:</label><input type="text" name="codecademyLink" placeholder="https://www.codecademy.com/fr/Utilisateur" required><br>
                        <label for="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><br><textarea name="superHero" rows="8" cols="80"></textarea><br>     
                        <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><br><textarea name="hack" rows="8" cols="80"></textarea><br>
                        <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ?</label><br><textarea name="experience" rows="8" cols="80"></textarea><br>
                        <input type="submit" value="Valider">
                    </form>
            <?php
                }
            ?>
        <a href="../">Retour au menu</a>
    </body>
</html>