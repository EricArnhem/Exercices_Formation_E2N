<?php
include_once('configuration.php');
include_once('class/db.php');
include_once('model/users.php');
include_once('model/services.php');
include_once('controller/indexController.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 1 - Partie 3 - PDO</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
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
            <h1>TP 1</h1>
            <div class="col-lg-12">
                <a href="addUser.php" title="Ajouter un utilisateur" class="btn btn-success col-lg-offset-4 col-lg-4">Ajouter un utilisateur</a>
                <div class="col-lg-offset-4 col-lg-8" id="sort_menu">
                    <form action="index.php" method="POST">
                        <label for="sortServices">Trier les utilisateurs par services:</label>
                        <select name="sortServices" onchange="form.submit()">
                            <option value="0">Tous</option>
                            <?php
                            // $selected prend la valeur chaine vide
                            $selected = '';
                            // Pour chaque service
                            foreach ($service as $serviceInfo) {
                                // Si l'id du service est égal à celui du service selectionné
                                if ( isset($_POST['sortServices']) && $serviceInfo->id == $_POST['sortServices']) {
                                    // $selected prend la valeur 'selected'
                                    $selected = 'selected';
                                }
                                // On affiche les informations sur le service
                                ?>
                                <option value="<?= $serviceInfo->id ?>" <?= $selected ?>><?= $serviceInfo->name ?></option>
                                <?php
                                // $selected reprend la valeur chaine vide
                                $selected = '';
                            }
                            ?>
                        </select>
                    </form>
                </div>
                <p class="text-center col-lg-12"><?= $deleteSentence ?></p>
            </div>
            <?php
            foreach ($user as $userInfo) {
                ?>
                <div class="div_user_info col-lg-offset-1 col-lg-4">
                    <ul class="user_info center-block">
                        <li><?= $userInfo->lastName ?></li>
                        <li><?= $userInfo->firstName ?></li>
                        <li><?= $userInfo->age ?> ans</li>
                        <li><?= $userInfo->address ?></li>
                        <li><?= $userInfo->postalCode ?></li>
                        <li><?= $userInfo->phoneNumber ?></li>
                        <li><?= $userInfo->name ?></li>
                    </ul>
                    <form action="index.php" method="POST">
                        <button type="submit" name="deleteUserButton" value="<?= $userInfo->id ?>" class="center-block btn btn-warning">Supprimer l'utilisateur</button>
                    </form>
                </div>
                <div class="col-lg-1"></div>
                <?php
            }
            ?>
        </div>
    </body>
</html>