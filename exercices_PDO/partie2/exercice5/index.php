<?php
// On essaye de se connecter à la database
try {
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'bidu60400');
}
// Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// Si les champs ont bien été remplis
if (!empty($_POST['showTitle']) && !empty($_POST['showArtist']) && !empty($_POST['showDate']) && isset($_POST['showType']) && isset($_POST['showKind1']) && isset($_POST['showKind2']) && !empty($_POST['showDuration']) && !empty($_POST['showStartTime'])) {
    // On récupère les données dans des variables
    $showTitle = strip_tags($_POST['showTitle']);
    $showArtist = strip_tags($_POST['showArtist']);
    $showDate = strip_tags($_POST['showDate']);
    $showType = strip_tags($_POST['showType']);
    $showKind1 = strip_tags($_POST['showKind1']);
    $showKind2 = strip_tags($_POST['showKind2']);
    $showDuration = strip_tags($_POST['showDuration']);
    $showStartTime = strip_tags($_POST['showStartTime']);
    // On prépare une requête SQL que l'on stocke dans $newShow
    $newShow = $db->prepare('UPDATE `shows` SET `title` = :title, `performer` = :performer, `date` = :date, `showTypesId` = :showTypesId, `firstGenresId` = :firstGenresId, `secondGenreId` = :secondGenreId, `duration` = :duration, `startTime` = :startTime WHERE `id` = 1;');
    // On bind les différentes valeurs
    $newShow->bindValue(':title', $showTitle, PDO::PARAM_STR);
    $newShow->bindValue(':performer', $showArtist, PDO::PARAM_STR);
    $newShow->bindValue(':date', $showDate, PDO::PARAM_STR);
    $newShow->bindValue(':showTypesId', $showType, PDO::PARAM_INT);
    $newShow->bindValue(':firstGenresId', $showKind1, PDO::PARAM_INT);
    $newShow->bindValue(':secondGenreId', $showKind2, PDO::PARAM_INT);
    $newShow->bindValue(':duration', $showDuration, PDO::PARAM_STR);
    $newShow->bindValue(':startTime', $showStartTime, PDO::PARAM_STR);
    // On exécute la requête
    $newShow->execute();
}
// On lance une commande SQL pour récupérer toutes les données de la table shows que l'on stocke dans $shows
$shows = $db->query('SELECT `title`, `performer`, `date`, `showTypesId`, `firstGenresId`, `secondGenreId`, `duration`, `startTime` FROM `shows` WHERE `id` = 1;');
$show = $shows->fetch(PDO::FETCH_OBJ);
?>
<h1>Exercice 5</h1>
<div class="container-fluid">
    <form class="form-horizontal" action="index.php?tab=5" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="showTitle">Titre du spectacle:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" value="<?= $show->title ?>" name="showTitle">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="showArtist">Artiste:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" value="<?= $show->performer ?>" name="showArtist">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="showDate">Date du spectacle:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="yyyy-mm-dd" value="<?= $show->date ?>" name="showDate">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="showType">Type de spectacle:</label>
            <div class="col-sm-9">
                <select class="form-control"  name="showType">
                    <?php
                    // On lance une commande SQL pour récupérer l'id et le genre de la table genre
                    $showTypes = $db->query('SELECT `id`, `type` FROM `showTypes`;');
                    $showType = $showTypes->fetchAll(PDO::FETCH_OBJ);
                    // Pour chaque genre dans la table on récupère les infos et on les affiches
                    foreach ($showType as $showTypeInfo) {
                        ?>
                        <option value="<?= $showTypeInfo->id ?>"><?= $showTypeInfo->type ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="showKind1">Genre 1:</label>
            <div class="col-sm-9">
                <select class="form-control" name="showKind1">
                    <?php
                    // On lance une commande SQL pour récupérer l'id et le genre de la table genre
                    $genres = $db->query('SELECT `id`, `genre` FROM `genres`;');
                    $genre = $genres->fetchAll(PDO::FETCH_OBJ);
                    $selected = '';
                    // Pour chaque genre dans la table on récupère les infos et on les affiches
                    foreach ($genre as $genreInfo) {
                        if ($genreInfo->id == $show->firstGenresId) {
                            $selected = 'selected';
                        }
                        ?>
                        <option value="<?= $genreInfo->id ?>" <?= $selected ?>><?= $genreInfo->genre ?></option>
                        <?php
                        $selected = '';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="showKind2">Genre 2:</label>
            <div class="col-sm-9">
                <select class="form-control" name="showKind2">
                    <?php
                    $selected = '';
                    // Pour chaque genre dans la table on récupère les infos et on les affiches
                    foreach ($genre as $genreInfo) {
                        if ($genreInfo->id == $show->secondGenreId) {
                            $selected = 'selected';
                        }
                        ?>
                        ?>
                        <option value="<?= $genreInfo->id ?>" <?= $selected ?>><?= $genreInfo->genre ?></option>
                        <?php
                        $selected = '';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="showDuration">Durée:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="hh:mm:ss" value="<?= $show->duration ?>" name="showDuration">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="showStartTime">Heure de début:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="hh:mm:ss" value="<?= $show->startTime ?>" name="showStartTime">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div_clients_list">
            <h2 class="clients_list h2_lists">Affichage de la liste des spectacles</h2>
            <?php
            // On lance une commande SQL pour récupérer toutes les données de la table shows que l'on stocke dans $shows
            $shows = $db->query('SELECT `title`, `performer`, `date`, `showTypesId`, `firstGenresId`, `secondGenreId`, `duration`, `startTime` FROM `shows`;');
            $show = $shows->fetchAll(PDO::FETCH_OBJ);
            // Pour chaque show dans la table on récupère les infos et on les affiches
            foreach ($show as $showInfo) {
                ?>
                <ul>
                    <li><strong>Titre : </strong><?= $showInfo->title ?></li>
                    <li><strong>Artiste : </strong><?= $showInfo->performer ?></li>
                    <li><strong>Date : </strong><?= $showInfo->date ?></li>
                    <li><strong>Type : </strong><?= $showInfo->showTypesId ?></li>
                    <li><strong>Genre 1 : </strong><?= $showInfo->firstGenresId ?></li>
                    <li><strong>Genre 2 : </strong><?= $showInfo->secondGenreId ?></li>
                    <li><strong>Durée : </strong><?= $showInfo->duration ?></li>
                    <li><strong>Heure de début : </strong><?= $showInfo->startTime ?></li>
                </ul>
                <hr>
                <?php
            }
            ?>
        </div>
    </div>
</div>
