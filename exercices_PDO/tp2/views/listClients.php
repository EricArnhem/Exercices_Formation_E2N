<?php
include_once('model/clients.php');
include_once('controller/listClientsController.php');
?>
<div class="container-fluid">
    <div class="row">
        <?php
        foreach ($clientsList as $client) {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div_clients_list">
                <p class="clients_list"><?= $client->lastName ?> <?= $client->firstName ?> <a href="/detailClient/<?= $client->id ?>" title="Voir les infos personnelles" class="btn btn-default details_link">Voir les infos personnelles</a></p>
            </div>
            <?php
        }
        ?>
    </div>
</div>