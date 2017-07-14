<h1>Exercice 3</h1>
<?php
// On essaye de se connecter à la database
try{
  $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
// On lance une commande SQL pour récupérer les 20 premières lignes de la table clients que l'on stocke dans $query
$customers = $db->query('SELECT `lastName`, `firstName` FROM `clients` LIMIT 20');
$customer = $customers->fetchAll(PDO::FETCH_OBJ);
// Pour chaque client dans la table on récupère les infos et on les affiches
foreach ($customer as $customerInfo) {
  ?>
  <ul>
    <li><strong>Nom : </strong><?= $customerInfo->lastName?></li>
    <li><strong>Prénom : </strong><?= $customerInfo->firstName?></li>
  </ul>
  <hr>
  <?php
}
?>
