<?php
include_once('model/clients.php');
include_once('model/credits.php');
include_once('controller/addCreditController.php');
?>
<h2 class="text-center">Ajout d'un crédit</h2>
<div class="container-fluid">
    <form class="form-horizontal" action="/addCredit" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="clientRef">Choisissez un client:*</label>
            <div class="col-sm-9">
                <select name="clientRef" id="clientRef">
                    <?php
                    foreach ($clientsList as $client) {
                        ?>
                        <option value="<?= $client->id ?>"><?= $client->lastName . ' ' . $client->firstName ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="organization">Organisme:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="organization" id="organization" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="amount">Montant:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="amount" id="amount" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" class="btn btn-default" name="submit">Ajouter</button>
            </div>
        </div>
    </form>
    <p class="text-center"><?= $executionMessage ?></p>
</div>