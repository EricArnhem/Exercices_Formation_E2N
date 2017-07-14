<?php
include_once('configuration.php');
include_once('class/db.php');

$page = 'listClients';
if (isset($_GET['tab'])) {
    $page = $_GET['tab'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 2 - Partie 3 - PDO</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= SITEURL ?>/style.css">
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
                        <li><a href="http://pdotp1">TP 1</a></li>
                        <li class="active"><a href="http://pdotp2">TP 2</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://pdopartie1">Partie 1</a></li>
                        <li><a href="http://pdopartie2">Partie 2</a></li>
                        <li class="active"><a href="http://pdopartie3">Partie 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="navigation text-center">
            <h1>TP 2</h1>
            <a href="/listClients" title="Afficher les clients" class="btn btn-primary">Afficher les clients</a>
            <a href="/createClient" title="Créer un client" class="btn btn-success">Créer un client</a>
            <a href="/addCredit" title="Ajouter un crédit" class="btn btn-warning">Ajouter un crédit</a>
        </div>
        <div id="content container-fluid">
            <?php
            if (isset($_GET['tab']) && file_exists('views/' . $page . '.php')) {
                include_once('views/' . $page . '.php');
            } else if (file_exists('views/' . $page . '.php') == FALSE) {
                echo 'Désolé la page n\'existe pas';
            } else {
                include_once('views/listClients.php');
            }
            ?>
        </div>
    </body>
</html>