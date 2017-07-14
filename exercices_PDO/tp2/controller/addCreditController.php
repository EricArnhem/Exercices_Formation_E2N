<?php

$clients = new clients();
// On récupère l'id, le nom et le prénom de l'utilisateur pour les afficher dans un menu déroulant
$clientsList = $clients->getClientsList();

$credits = new credits();
// On initialise $executionMessage à chaîne vide pour éviter une erreur
$executionMessage = '';
// Variables des regexs
$regexAmount = '/^[+]?([0-9]+(?:[\.\,][0-9]*)?|\.[0-9]+)$/';
$regexClientRef = '/\d+/';
// Si les champs du formulaires sont remplis et valides
if (!empty($_POST['organization']) && !empty($_POST['amount']) && !empty($_POST['clientRef']) && preg_match($regexAmount, $_POST['amount']) && preg_match($regexClientRef, $_POST['clientRef'])) {
    // On stocke les valeurs dans les attributs de la classe
    $credits->organization = strip_tags($_POST['organization']);
    $credits->amount = strip_tags($_POST['amount']);
    $credits->clientRef = strip_tags($_POST['clientRef']);
    // Si la requête s'est bien exécutée ($result == TRUE)
    if ($credits->addCredit()) {
        $executionMessage = 'Le crédit a bien été ajouté.';
    } else {
        $executionMessage = 'Un problème est survenu lors de la tentative d\'ajout du crédit.';
    }
} else if (isset($_POST['submit']) && (empty($_POST['organization']) || empty($_POST['amount']) || empty($_POST['clientRef']) || !preg_match($regexAmount, $_POST['amount']) || !preg_match($regexClientRef, $_POST['clientRef']))){
    $executionMessage = 'Le montant n\'est pas valide.';
}