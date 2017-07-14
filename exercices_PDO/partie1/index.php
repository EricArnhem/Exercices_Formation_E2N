<?php
$page = 1;
if (isset($_GET['tab'])) {
    $page = $_GET['tab'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 1 - PDO</title>
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
                    <a class="navbar-brand" href="#">Partie 1 - PDO</a>
                </div>
                <div class="collapse navbar-collapse" id="buttons_navbar">
                    <ul class="nav navbar-nav">
                        <li class="<?php
                        if ($page == 1) {
                            echo 'active';
                        }
                        ?>"><a href="index.php?tab=1">Exercice 1</a></li>
                        <li class="<?php
                        if ($page == 2) {
                            echo 'active';
                        }
                        ?>"><a href="index.php?tab=2">Exercice 2</a></li>
                        <li class="<?php
                        if ($page == 3) {
                            echo 'active';
                        }
                        ?>"><a href="index.php?tab=3">Exercice 3</a></li>
                        <li class="<?php
                        if ($page == 4) {
                            echo 'active';
                        }
                        ?>"><a href="index.php?tab=4">Exercice 4</a></li>
                        <li class="<?php
                        if ($page == 5) {
                            echo 'active';
                        }
                        ?>"><a href="index.php?tab=5">Exercice 5</a></li>
                        <li class="<?php
                        if ($page == 6) {
                            echo 'active';
                        }
                        ?>"><a href="index.php?tab=6">Exercice 6</a></li>
                        <li class="<?php
                        if ($page == 7) {
                            echo 'active';
                        }
                        ?>"><a href="index.php?tab=7">Exercice 7</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="http://pdopartie1">Partie 1</a></li>
                        <li><a href="http://pdopartie2">Partie 2</a></li>
                        <li><a href="http://pdopartie3">Partie 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="content">
            <?php
            if (isset($_GET['tab']) && file_exists('exercice' . $page . '/index.php')) {
                include('exercice' . $page . '/index.php');
            } else if (file_exists('exercice' . $page . '/index.php') == FALSE) {
                echo 'Désolé le fichier de l\'exercice n\'existe pas';
            } else {
                include('exercice1/index.php');
            }
            ?>
        </div>
    </body>
</html>
