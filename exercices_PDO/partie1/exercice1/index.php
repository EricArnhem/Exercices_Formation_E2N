<h1>Exercice 1</h1>
<?php
// Définition de la constante HOST qui a pour valeur localhost
define('HOST', 'localhost');
// Définition de la constante LOGIN qui a pour valeur root
define('LOGIN', 'root');
// On essaye de se connecter à la database
try{
  // Le terme new permet d'instancier la classe PDO qui devient un objet PDO
  $db = new PDO('mysql:host='.HOST.';dbname=colyseum;charset=utf8', LOGIN, 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
// On lance une commande SQL pour récupérer toutes les données de la table clients que l'on stocke dans $customers
// On concatène dans le SQL le nom et le prénom (bien mettre un AS pour renommer le nouveau champ sinon erreur)
$customers = $db->query('SELECT CONCAT(`lastName`,\' \',`firstName`) AS `name` FROM `clients`;');
$customer = $customers->fetchAll(PDO::FETCH_ASSOC);
// Pour chaque client dans la table on récupère les infos et on les affiches
foreach ($customer as $info) {
  ?>
  <ul>
    <li><strong>Nom et Prénom : </strong><?= $info['name']; ?></li>
  </ul>
  <hr>
  <?php
}
// On ferme les résultats de recherche avec closeCursor() après avoir traité chaque requête
// Le closeCursor() libère la mémoire allouée pour la requête mais n'est pas obligatoire
$customers->closeCursor();
?>
