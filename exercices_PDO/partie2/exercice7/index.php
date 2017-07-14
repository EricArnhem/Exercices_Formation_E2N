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
if (!empty($_POST['lastName'][0]) && !empty($_POST['firstName'][0]) && !empty($_POST['birthDate'][0]) && !empty($_POST['lastName'][1]) && !empty($_POST['firstName'][1]) && !empty($_POST['birthDate'][1])) {
    // On exécute une requête SQL que l'on stocke dans $deleteCustomer
    $deleteCustomer = $db->query('DELETE FROM `clients` WHERE `id` IN (24, 25)');
}
?>
<h1>Exercice 7</h1>
<div class="container-fluid">
    <form class="form-horizontal" action="index.php?tab=7" method="POST">
        <?php
        // On lance une commande SQL pour récupérer toutes les données de la table clients où id = 24 et id = 25
        $customers = $db->query('SELECT `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients` WHERE `id` IN (24, 25)');
        $customer = $customers->fetchAll(PDO::FETCH_OBJ);
        // Pour chaque client dans la table on récupère les infos et on les affiches
        foreach ($customer as $key => $info) {
            ?>
            <div class="form-group">
                <label class="control-label col-sm-2" for="lastName[<?= $key ?>]">Nom:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $info->lastName ?>" name="lastName[<?= $key ?>]">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="firstName[<?= $key ?>]">Prénom:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $info->firstName ?>" name="firstName[<?= $key ?>]">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="birthDate[<?= $key ?>]">Date de naissance:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $info->birthDate ?>" placeholder="2000-12-01" name="birthDate[<?= $key ?>]">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="fidelityCard[<?= $key ?>]">Carte de fidélité:</label>
                <div class="col-sm-9">
                    <input type="checkbox" <?php
                    if ($info->card == 1) {
                        echo 'checked';
                    }
                    ?> name="fidelityCard[<?= $key ?>]">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="numCard[<?= $key ?>]">Numéro de carte:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $info->cardNumber ?>" name="numCard[<?= $key ?>]">
                </div>
            </div>
            <hr>
            <?php
        }
        ?>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" class="btn btn-default">Supprimer</button>
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