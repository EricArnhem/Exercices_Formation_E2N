<?php
include_once('model/clients.php');
include_once('model/maritalStatus.php');
include_once('controller/createClientController.php');
?>
<h2 class="text-center">Création d'un client</h2>
<div class="container-fluid">
    <form class="form-horizontal" action="/createClient" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="lastName">Nom:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="lastName" id="lastName" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="firstName">Prénom:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="firstName" id="firstName" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="birthDate">Date de naissance:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="2000-12-01" name="birthDate" id="birthDate" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Adresse:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="address" id="address" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="postalCode">Code postal:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="60400" name="postalCode" id="postalCode" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="phoneNumber">Numéro de téléphone:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="0648597123" name="phoneNumber" id="phoneNumber" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="maritalStatus">Statut marital:*</label>
            <div class="col-sm-9">
                <select name="maritalStatus" id="martialStatus">
                    <?php
                    foreach ($maritalStatusList as $maritalStatus) {
                        ?>
                        <option value="<?= $maritalStatus->id ?>"><?= $maritalStatus->status ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" class="btn btn-default" name="submit">Valider</button>
            </div>
        </div>
    </form>
    <p class="text-center"><?= $executionMessage ?></p>
</div>