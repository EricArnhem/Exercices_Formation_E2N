<?php

$clients = new clients();
$credits = new credits();

// Si $_GET['client'] est défini
if (isset($_GET['client'])) {
    // L'attribut clientId de la classe clients prend sa valeur
    $clients->clientId = $_GET['client'];
    $credits->clientId = $_GET['client'];
}

// On récupère les infos du client avec la méthode getClientInfo()
$clientsInfos = $clients->getClientInfos();

// On récupère les crédits du client avec la méthode getCreditList()
$creditsList = $credits->getCreditList();
