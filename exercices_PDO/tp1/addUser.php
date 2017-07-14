<?php
include_once('configuration.php');
include_once('class/db.php');
include_once('model/users.php');
include_once('model/services.php');
include_once('controller/addUserController.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 1 - Partie 3 - PDO</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#buttons_navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Partie 3 - PDO</a>
                </div>
                <div class="collapse navbar-collapse" id="buttons_navbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://pdotp1">TP 1</a></li>
                        <li><a href="http://pdotp2">TP 2</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://pdopartie1">Partie 1</a></li>
                        <li><a href="http://pdopartie2">Partie 2</a></li>
                        <li class="active"><a href="http://pdopartie3">Partie 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="content">
            <h1>Ajout d'un utilisateur</h1>
            <div class="container-fluid">
                <form class="form-horizontal" action="addUser.php" method="POST">
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
                            <input type="text" class="form-control" name="postalCode" id="postalCode" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="phoneNumber">Numéro de téléphone:*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="service">Service:*</label>
                        <div class="col-sm-9">
                            <select name="service" id="service">
                                <?php
                                $selected = '';
                                foreach ($service as $serviceInfo) {
                                    if ( isset($_POST['service']) && $serviceInfo->id == $_POST['service']) {
                                    // $selected prend la valeur 'selected'
                                    $selected = 'selected';
                                }
                                    ?>
                                <option value="<?= $serviceInfo->id ?>" <?= $selected ?>><?= $serviceInfo->name ?></option>
                                    <?php
                                    $selected = '';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                            <button type="submit" class="btn btn-default">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- On appelle la méthode addUser() qui va ajouter un utilisateur dans la base de données -->
            <p class="text-center"><?= $executionMessage ?></p>
            <div class="col-lg-12">
                <a href="index.php" title="Retour à l'accueil" class="btn btn-success col-lg-offset-4 col-lg-4">Retour à l'accueil</a>
            </div>
        </div>
    </body>
</html>