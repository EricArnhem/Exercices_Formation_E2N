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
if (!empty($_POST['bookingNumber'][0]) && !empty($_POST['clientNumber'][0]) && !empty($_POST['bookingNumber'][1]) && !empty($_POST['clientNumber'][1])) {
    // On exécute une requête SQL que l'on stocke dans $deleteBooking
    $deleteBooking = $db->query('DELETE FROM `bookings` WHERE `id` IN (24, 25);');
}
// On lance une commande SQL pour récupérer l'id et le clientId de la table bookings
$bookings = $db->query('SELECT `id`, `clientId` FROM `bookings` WHERE `clientId` IN (24, 25) ');
$booking = $bookings->fetchAll(PDO::FETCH_OBJ);
?>
<h1>Exercice 8</h1>
<div class="container-fluid">
    <form class="form-horizontal" action="index.php?tab=8" method="POST">
        <?php
        // Pour chaque réservation dans la table on récupère les infos et on les affiches
        foreach ($booking as $key => $bookingInfo) {
            ?>
            <div class="form-group">
                <label class="control-label col-sm-2" for="bookingNumber[<?= $key ?>]">Numéro réservation:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $bookingInfo->id ?>" name="bookingNumber[<?= $key ?>]">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="clientNumber[<?= $key ?>]">Numéro client:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $bookingInfo->clientId ?>" name="clientNumber[<?= $key ?>]">
                </div>
            </div>
            <hr>
            <?php
        }
        if (COUNT($booking) > 0) {
            ?> 
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-default">Supprimer</button>
                </div>
            </div>
            <?php
        }
        ?>
    </form>
</div>
<h2>Affichage de la liste des réservations</h2>
<?php
// Pour chaque réservation dans la table on récupère les infos et on les affiches
foreach ($booking as $key => $bookingInfo) {
    ?>
    <ul>
        <li><strong>Numéro réservation : </strong><?= $bookingInfo->id ?></li>
        <li><strong>Numéro client : </strong><?= $bookingInfo->clientId ?></li>
    </ul>
    <hr>
    <?php
}
?>