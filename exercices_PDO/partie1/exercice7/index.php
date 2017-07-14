<h1>Exercice 7</h1>
<?php
// On essaye de se connecter à la database
try {
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// On lance une commande SQL pour récupérer toutes les données de la table clients que l'on stocke dans $query
$customers = $db->query('SELECT `id`, `lastName`, `firstName`, `birthDate`, '
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
        <li><strong>ID : </strong><?= $info->id ?></li>
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
