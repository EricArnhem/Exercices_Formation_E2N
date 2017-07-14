<h1>Exercice 6</h1>
<?php
// On essaye de se connecter à la database
try{
  $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
// On lance une commande SQL pour récupérer toutes les données de la table shows
// On trie ces données par ordre alphabétique du titre et on les stocke dans $query
$shows = $db->query('SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title` ASC;');
$show = $shows->fetchAll(PDO::FETCH_OBJ);
// Pour chaque client dans la table on récupère les infos du spectacle et on les affiches
foreach ($show as $showInfo) {
  ?>
  <p><strong><?=$showInfo->title?></strong> par <strong><?=$showInfo->performer?></strong>, le <strong><?=$showInfo->date?></strong> à <strong><?=$showInfo->startTime?></strong></p>
  <hr>
  <?php
}
?>
