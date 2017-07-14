<?php
include_once('model/clients.php');
include_once('model/credits.php');
include_once('controller/detailClientController.php');
?>
<div class="container-fluid">
    <div class="row">
        <?php
        foreach ($clientsInfos as $client) {
            ?>
            <div class="col-lg-offset-2 col-lg-8" id="client_infos">
                <h2 class="details_subtitle">Informations personnelles</h2>
                <ul>
                    <li><?= $client->lastName ?></li>
                    <li><?= $client->firstName ?></li>
                    <li><?= $client->birthDate ?></li>
                    <li><?= $client->address ?></li>
                    <li><?= $client->postalCode ?></li>
                    <li><?= $client->phoneNumber ?></li>
                    <li><?= $client->status ?></li>
                </ul>
                <?php
                if (COUNT($creditsList) > 0) {
                    ?>
                    <h2 class="details_subtitle">Crédits</h2>
                    <?php
                    foreach ($creditsList as $credit) {
                        ?>
                        <ul>
                            <li><?= $credit->organization ?></li>
                            <li><?= $credit->amount ?>€</li>
                        </ul>
                        <hr>
                        <?php
                    }
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>