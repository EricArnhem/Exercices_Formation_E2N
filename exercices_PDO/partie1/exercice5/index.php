<h1>Exercice 5</h1>
<?php
// On essaye de se connecter à la database
try{
  $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
// On lance une commande SQL pour récupérer les données de la table clients où lastName commence par un M
// On classe les données par autre alphabétique du nom
$customers = $db->query('SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName` ASC');
$customer = $customers->fetchAll(PDO::FETCH_OBJ);
// Pour chaque client dans la table on récupère le nom et prénom et on les affiches
foreach ($customer as $info) {
  ?>
  <ul>
    <li><strong>Nom : </strong><?= $info->lastName?></li>
    <li><strong>Prénom : </strong><?= $info->firstName?></li>
  </ul>
  <hr>
  <?php
}
?>
