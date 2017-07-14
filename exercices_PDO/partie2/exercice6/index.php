<?php
// On essaye de se connecter à la database
try {
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// Si les champs du nom, prénom et date de naissance ont bien été remplis
if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['birthDate'])) {
    // On récupère les données dans des variables
    $lastName = strip_tags($_POST['lastName']);
    $firstName = strip_tags($_POST['firstName']);
    $birthDate = strip_tags($_POST['birthDate']);

    // On prépare une requête SQL que l'on stocke dans $newCustomer
    $newCustomer = $db->prepare('UPDATE `clients` SET `lastName` = :lastName, `firstName` = :firstName, `birthDate` = :birthDate WHERE `id` = 5;');
    // On bind les différentes valeurs
    $newCustomer->bindValue(':lastName', $lastName, PDO::PARAM_STR);
    $newCustomer->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $newCustomer->bindValue(':birthDate', $birthDate, PDO::PARAM_STR);
    // On exécute la requête
    $newCustomer->execute();
}

// On lance une commande SQL pour récupérer toutes les données de la table clients où id = 5
$customers = $db->query('SELECT `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients` WHERE `id` = 5;');
$customer = $customers->fetch(PDO::FETCH_OBJ);
?>
<h1>Exercice 6</h1>
<div class="container-fluid">
    <form class="form-horizontal" action="index.php?tab=6" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="lastName">Nom:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" value="<?= $customer->lastName ?>" name="lastName">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="firstName">Prénom:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" value="<?= $customer->firstName ?>" name="firstName">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="birthDate">Date de naissance:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" value="<?= $customer->birthDate ?>" placeholder="2000-12-01" name="birthDate">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="fidelityCard">Carte de fidélité:</label>
            <div class="col-sm-9">
                <input type="checkbox" <?php
                if ($customer->card == 1) {
                    echo 'checked';
                }
                ?> name="fidelityCard">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="numCard">Numéro de carte:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" value="<?= $customer->cardNumber ?>" name="numCard">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
<h2>Affichage de la liste des clients</h2>
<?php
// On lance une commande SQL pour récupérer toutes les données de la table clients que l'on stocke dans $query
$customers = $db->query('SELECT `lastName`, `firstName`, `birthDate`, '
        . 'CASE `card` '
        . 'WHEN 1 THEN \'Oui\' '
        . 'ELSE \'Non\' '
        . 'END AS `card`'
        . ',`cardNumber` FROM `clients`;');
$customer = $customers->fetchAll(PDO::FETCH_OBJ);
// Pour chaque client dans la table on récupère le nom et prénom et on les affiches
foreach ($customer as $info) {
    ?>
    <ul>
        <li><strong>Nom : </strong><?= $info->lastName ?></li>
        <li><strong>Prénom : </strong><?= $info->firstName ?></li>
        <li><strong>Date de naissance : </strong><?= $info->birthDate ?></li>
        <li><strong>Carte : </strong><?= $info->card ?></li>
        <?php if ($info->card == 'Oui') { ?>
            <li><strong>Numéro de carte : </strong><?= $info->cardNumber ?></li><?php
        }
        ?>
    </ul>
    <hr>
    <?php
}
?>
