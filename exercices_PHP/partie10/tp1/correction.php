<?php
// onn génères les choix de la listes déroulantes
$diploma = array(
    '1' => 'sans',
    '2' => 'Bac',
    '3' => 'Bac+2',
    '4' => 'Bac+3',
    '5' => 'supérieur'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TP1</title>
        <meta charset="utf-8"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <h1><strong>TP1</strong></h1>
        <div class="btn-group text-center">
            <a title="TP1" type="button" class="btn btn-primary" href="index.php">TP1</a>
            <a title="TP2" type="button" class="btn btn-primary" href="../tp2/index.php">TP2</a>
            <a title="TP3" type="button" class="btn btn-primary" href="../tp3/index.php">TP3</a>
        </div>

        <!--
        ********* ÉNONCÉ *********
        Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :

        Nom
        Prénom
        Date de naissance
        Pays de naissance
        Nationalité
        Adresse
        Email
        Téléphone
        Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)
        Numéro pôle emploi
        Nombre de badge
        Liens codecademy
        Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?
        Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
        Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?

        A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.

        -->
        <!-- formulaire qui renvoie les données saisies par l'utilisateur avec la méthodde POST et afficher sur la même page -->
        <div class="container">
            <form class="form-horizontal" action="index.php" method="POST">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="secondName">Prénom</label>
                    <div class="col-sm-8">
                        <input title="Prénom" class="form-control" type="text" name="secondName"/>
                    </div>
                </div><div class="form-group">
                    <label class="col-sm-3 control-label" for="firstName">Nom</label>
                    <div class="col-sm-8">
                        <input title="Nom" class="form-control" type="text" name="firstName"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="birthDay">Date de Naissance (jj/mm/aaaa)</label>
                    <div class="col-sm-8">
                        <input title="Date de Naissance" class="form-control" type="text" name="birthDay" placeholder="ex: 12/06/1995" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="birthContry">Pays de Naissance</label>
                    <div class="col-sm-8">
                        <input title="Pays de Naissance" class="form-control" type="text" name="birthContry"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="nationality">Nationalité</label>
                    <div class="col-sm-8">
                        <input title="Nationalité" class="form-control" type="text" name="nationality">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="adress">Adresse</label>
                    <div class="col-sm-8">
                        <input title="Adresse" class="form-control" type="text" name="adress"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="country">Ville</label>
                    <div class="col-sm-8">
                        <input title="Adresse" class="form-control" type="text" name="country"/>
                    </div>
                </div> <div class="form-group">
                    <label class="col-sm-3 control-label" for="postalCode">Code postal</label>
                    <div class="col-sm-8">
                        <input title="Adresse" class="form-control" type="text" name="postalCode"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="eMail">Email</label>
                    <div class="col-sm-8">
                        <input title="Email" class="form-control" type="email" name="eMail"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="phone">Téléphone</label>
                    <div class="col-sm-8">
                        <input title="Téléphone" class="form-control" type="text" name="phone"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="diploma">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</label>
                    <div class="col-sm-8">
                        <select name="diploma">
                            <?php
                            // la liste déroulante contient les indexs du tableau $diploma
                            foreach ($diploma as $indexDiplomaArray => $diplomaType) {
                                ?>
                                <option value="<?= $indexDiplomaArray ?>"><?= $diplomaType ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="poleEmploiNumber">Numéro pôle emploi</label>
                    <div class="col-sm-8">
                        <input title="Numéro pôle emploi" class="form-control" type="text" name="poleEmploiNumber"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="badgeNumber">Nombre de badges</label>
                    <div class="col-sm-8">
                        <input title="Nombre de badge" class="form-control" type="text" name="badgeNumber"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="codecademyLinks">Liens codecademy</label>
                    <div class="col-sm-8">
                        <input title="Liens codecademy" class="form-control" type="text" name="codecademyLinks"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                    <div class="col-sm-8">
                        <textarea title="" rows="6" cols="45" type="text" name="hero"/></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <div class="col-sm-8">
                        <textarea title="" rows="6" cols="45" type="text" name="hack"/></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <div class="col-sm-8">
                        <textarea title="" rows="6" cols="45" type="text" name="experience"/></textarea>
                    </div>
                </div>
                <input class="btn btn-primary" title="envoyer" type="submit" name="send" value="Envoyer"/>
            </form>
        </div>
    </body>
</html>
<?php
// on récupère les valeurs des champs remplis par l'utilisateur
if (!empty($_POST['firstName']) && !empty($_POST['secondName']) && !empty($_POST['birthDay']) && !empty($_POST['birthContry']) && !empty($_POST['nationality']) && !empty($_POST['eMail']) && !empty($_POST['phone']) && isset($_POST['diploma']) && !empty($_POST['adress']) && !empty($_POST['country']) && !empty($_POST['postalCode']) && !empty($_POST['poleEmploiNumber']) && !empty($_POST['badgeNumber']) && !empty($_POST['codecademyLinks']) && !empty($_POST['hero']) && !empty($_POST['hack']) && !empty($_POST['experience'])) {
    $inputRecoverSecondName = strip_tags($_POST['firstName']);
    $inputRecoverFirstName = strip_tags($_POST['secondName']);
    $inputRecoverBirthday = strip_tags($_POST['birthDay']);
    $inputRecoverBirthCountry = strip_tags($_POST['birthContry']);
    $inputRecoverNationality = strip_tags($_POST['nationality']);
    $inputRecoverAdress = strip_tags($_POST['adress']);
    $inputRecoverCountry = strip_tags($_POST['country']);
    $inputRecoverPostalCode = strip_tags($_POST['postalCode']);
    $inputRecoverEmail = strip_tags($_POST['eMail']);
    $inputRecoverPhone = strip_tags($_POST['phone']);
    $inputRecoverDiploma = strip_tags($_POST['diploma']);
    $inputRecoverPoleEmploi = strip_tags($_POST['poleEmploiNumber']);
    $inputRecoverBadge = strip_tags($_POST['badgeNumber']);
    $inputRecoverLinks = strip_tags($_POST['codecademyLinks']);
    $inputRecoverHero = strip_tags($_POST['hero']);
    $inputRecoverHack = strip_tags($_POST['hack']);
    // on prédéfini la sytaxe des champs que l'utilisateurs devra compléter
    $nameSyntax = '/^[a-zA-Z]+[-]?[a-zA-Z]+$/';
    
    $dateSyntax = '/^((0[0-9])|([12][0-9])|(3[01]))[\/\.\-]((0[1-9])|(1[0-2]))[\/\.\-](((19)\d{2})|((200)[01]))/'; // autre solution '^[0-2][0-9]+[\/]+[0-1][0-9]+[\/]+[1-2][0-9]+';
    $mailSyntaxe = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/';
    $adressSyntax = '/^[0-9]+ [a-zA-Z\D]+/';
    $phoneSyntax = '/^0[1-9]([ \.\-\/,]?\d{2}){4}/';
    $postalCodeSyntax = '/^[0-9]{5}/';
    $poleEmploiSyntax = '/^[0-9]{7}[A-Z]{1}$/';
    $linkSyntax = '/^[(https:\/\/www.codecademy.com\/fr\/)].+$/';
    // on vérifie que les champs remplis par l'utilisateur correspondent avec les regex défini plus haut
    $nameSyntaxIsOk = preg_match($nameSyntax, $inputRecoverSecondName);
    $name2SyntaxIsOk = preg_match($nameSyntax, $inputRecoverFirstName);
    $dateSyntaxIsOk = preg_match($dateSyntax, $inputRecoverBirthday);
    $name3SyntaxIsOk =preg_match($nameSyntax, $inputRecoverBirthCountry);
    $nameSyntaxIsOk = preg_match($nameSyntax, $inputRecoverNationality);
    $adressSyntaxIsOk = preg_match($adressSyntax, $inputRecoverAdress);
    $name4SyntaxIsOk = preg_match($nameSyntax, $inputRecoverCountry);
    $npostSyntaxIsOk = preg_match($postalCodeSyntax, $inputRecoverPostalCode);
    $nmailSyntaxIsOk = preg_match($mailSyntaxe, $inputRecoverEmail);
    $phoneSyntaxIsOk = preg_match($phoneSyntax, $inputRecoverPhone);
    $npoleSyntaxIsOk = preg_match($nameSyntax, $inputRecoverDiploma);
    $linkSyntaxIsOk = preg_match($poleEmploiSyntax, $inputRecoverPoleEmploi);
    if (preg_match($nameSyntax, $inputRecoverSecondName) && preg_match($nameSyntax, $inputRecoverFirstName) && preg_match($dateSyntax, $inputRecoverBirthday) 
            && preg_match($nameSyntax, $inputRecoverBirthCountry) && preg_match($nameSyntax, $inputRecoverNationality) && preg_match($adressSyntax, $inputRecoverAdress) 
            && preg_match($nameSyntax, $inputRecoverCountry) && preg_match($postalCodeSyntax, $inputRecoverPostalCode) && preg_match($mailSyntaxe, $inputRecoverEmail) 
            && preg_match($phoneSyntax, $inputRecoverPhone) && preg_match($poleEmploiSyntax, $inputRecoverPoleEmploi) && preg_match($linkSyntax, $inputRecoverLinks)) {
        ?>
        <div>
            <ul>
                <li>Vous : <?= $inputRecoverSecondName . ' ' . $inputRecoverFirstName ?></li>
                <li>êtes né(e) le : <?= $inputRecoverBirthday . ' à ' . $inputRecoverBirthCountry . ', de nationalité ' . $inputRecoverNationality ?></li>
                <li>Votre addresse : <?= $inputRecoverAdress . ' - ' . $inputRecoverCountry . ' - ' . $inputRecoverPostalCode ?></li>
                <li>Email : <?= $inputRecoverEmail ?></li>
                <li>tel : <?= $inputRecoverPhone ?></li>
                <li>Niveau de diplôme : 
                    <?php
                    if (is_numeric($inputRecoverDiploma) && $inputRecoverDiploma > 0 && $inputRecoverDiploma < 500) {
                        echo $inputRecoverDiploma;
                    }
                    ?></li>
                <li>Nombre de badges : <?= $inputRecoverBadge ?></li>
                <li>Numéro Pôle Emploi : <?= $inputRecoverPoleEmploi ?></li>
                <li></li>
            </ul>

        </div>
        <?php
    } else {
        echo 'Veuillez vérifier que les champs soient remplis correctement';
    }
}
?>
</div>
</html>
