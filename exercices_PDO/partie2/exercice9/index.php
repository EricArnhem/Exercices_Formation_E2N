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
if (!empty($_POST['ticketNumber'][0]) && !empty($_POST['ticketPrice'][0]) && !empty($_POST['bookingNumber'][0])) {
    // On exécute une requête SQL que l'on stocke dans $deleteTicket
    $deleteTicket = $db->query('DELETE FROM `tickets` WHERE `bookingsId` IN (24, 25);');
}
// On lance une commande SQL pour récupérer l'id et le clientId de la table bookings
$tickets = $db->query('SELECT `id`, `price`, `bookingsId` FROM `tickets` WHERE `bookingsId` IN (24, 25)');
$ticket = $tickets->fetchAll(PDO::FETCH_OBJ);
?>
<h1>Exercice 9</h1>
<div class="container-fluid">
    <form class="form-horizontal" action="index.php?tab=9" method="POST">
        <?php
        // Pour chaque réservation dans la table on récupère les infos et on les affiches
        foreach ($ticket as $key => $ticketInfo) {
            ?>
            <div class="form-group">
                <label class="control-label col-sm-2" for="ticketNumber[<?= $key ?>]">Numéro billets:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $ticketInfo->id ?>" name="ticketNumber[<?= $key ?>]">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="ticketPrice[<?= $key ?>]">Prix:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $ticketInfo->price ?>" name="ticketPrice[<?= $key ?>]">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="bookingNumber[<?= $key ?>]">Numéro réservation:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $ticketInfo->bookingsId ?>" name="bookingNumber[<?= $key ?>]">
                </div>
            </div>
            <hr>
            <?php
        }
        if (COUNT($ticket) > 0) {
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
foreach ($ticket as $key => $ticketInfo) {
    ?>
    <ul>
        <li><strong>Numéro billets : </strong><?= $ticketInfo->id ?></li>
        <li><strong>Prix : </strong><?= $ticketInfo->price ?></li>
        <li><strong>Numéro réservation : </strong><?= $ticketInfo->bookingsId ?></li>
    </ul>
    <hr>
    <?php
}
?>