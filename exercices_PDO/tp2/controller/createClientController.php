<?php

$maritalStatus = new maritalStatus();
// On appelle la méthode getStatusList pour obtenir la liste des statuts
$maritalStatusList = $maritalStatus->getStatusList();

$clients = new clients();
// On initialise $executionMessage à chaîne vide pour éviter une erreur
$executionMessage = '';
// Variables des regexs
$regexName = '/^([A-Z]?[a-zàéèôùïäöç]+([ ]?[a-zàéèôùïäöç]?[\'-]?[A-Z]?[a-zàéèôùïäöç]+)*)$/';
$regexPhone = '/^[0][0-9]{9}$/';
$regexPostalCode = '/^[0-9]{5}$/';
// Si les champs du formulaires sont remplis et valides
if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['birthDate']) && !empty($_POST['address']) && !empty($_POST['postalCode']) && !empty($_POST['phoneNumber']) && !empty($_POST['maritalStatus']) && preg_match($regexName, $_POST['lastName']) && preg_match($regexName, $_POST['firstName']) && preg_match($regexPhone, $_POST['phoneNumber']) && preg_match($regexPostalCode, $_POST['postalCode'])) {
    // On stocke les valeurs dans les attributs de la classe
    $clients->lastName = strip_tags($_POST['lastName']);
    $clients->firstName = strip_tags($_POST['firstName']);
    $clients->birthDate = strip_tags($_POST['birthDate']);
    $clients->address = strip_tags($_POST['address']);
    $clients->postalCode = strip_tags($_POST['postalCode']);
    $clients->phoneNumber = strip_tags($_POST['phoneNumber']);
    $clients->maritalStatus = strip_tags($_POST['maritalStatus']);
    // Si la requête s'est bien exécutée ($result == TRUE)
    if ($clients->createClient()) {
        $executionMessage = 'Le nouveau client a bien été ajouté.';
    } else {
        $executionMessage = 'Un problème est survenu lors de la tentative d\'ajout d\'un nouveau client.';
    }
} else if (isset($_POST['submit']) && (empty($_POST['lastName']) || empty($_POST['firstName']) || empty($_POST['birthDate']) || empty($_POST['address']) || empty($_POST['postalCode']) || empty($_POST['phoneNumber']) || empty($_POST['maritalStatus']) || !preg_match($regexName, $_POST['lastName']) || !preg_match($regexName, $_POST['firstName']) || !preg_match($regexPhone, $_POST['phoneNumber']) || !preg_match($regexPostalCode, $_POST['postalCode']))){
    $executionMessage = 'Les informations sont incorrectes.';
}