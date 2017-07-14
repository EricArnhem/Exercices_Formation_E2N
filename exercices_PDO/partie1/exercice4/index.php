<h1>Exercice 4</h1>
<?php
// On essaye de se connecter à la database
try{
  $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
// On lance une commande SQL pour récupérer les données de la table clients où card=1
$customers = $db->query('SELECT `id`, `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients` WHERE `card`=1;');
$customer = $customers->fetchAll(PDO::FETCH_OBJ);
// Pour chaque client dans la table on récupère les infos et on les affiches
foreach ($customer as $info) {
  ?>
  <ul>
    <li><strong>ID : </strong><?= $info->id?></li>
    <li><strong>Nom : </strong><?= $info->lastName?></li>
    <li><strong>Prénom : </strong><?= $info->firstName?></li>
    <li><strong>Date de naissance : </strong><?= $info->birthDate?></li>
    <li><strong>Carte : </strong><?= $info->card?></li>
    <li><strong>Numéro de carte : </strong><?= $info->cardNumber?></li>
  </ul>
  <hr>
  <?php
}
?>
