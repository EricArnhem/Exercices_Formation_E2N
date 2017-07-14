<h1>Exercice 2</h1>
<?php
// On essaye de se connecter à la database
try{
  $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
// On lance une commande SQL pour récupérer les données de la colonne type de la table showTypes
$types = $db->query('SELECT `type` FROM `showTypes`;');
$type = $types->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Types de concerts:</h2>
<ul>
  <?php
  // Pour chaque type dans la table on récupère le type de spectacle et on l'affiche
  foreach ($type as $showType) {
    ?>
    <li><?= $showType['type']; ?></li>
    <?php
  }
  ?>
</ul>
