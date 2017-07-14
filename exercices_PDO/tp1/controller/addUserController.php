<?php

// On instancie l'objet services
$services = new services();
// On appelle la méthode getServicesList() qui va lister les différents services
$service = $services->getServicesList();

// On instancie l'objet users
$users = new users();

// Test des informations du formulaires + ajout si elles sont valides
// On initialise $executionMessage à chaîne vide pour éviter une erreur
$executionMessage = '';
// Si les champs du formulaires sont remplis
if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['birthDate']) && !empty($_POST['address']) && !empty($_POST['postalCode']) && !empty($_POST['phoneNumber']) && !empty($_POST['service']) && preg_match($users->regexName, $_POST['lastName']) && preg_match($users->regexName, $_POST['firstName']) && preg_match($users->regexPhone, $_POST['phoneNumber']) && preg_match($users->regexPostalCode, $_POST['postalCode'])) {
    // On stocke les valeurs dans les attributs de la classe
    $users->lastName = strip_tags($_POST['lastName']);
    $users->firstName = strip_tags($_POST['firstName']);
    $users->birthDate = strip_tags($_POST['birthDate']);
    $users->address = strip_tags($_POST['address']);
    $users->postalCode = strip_tags($_POST['postalCode']);
    $users->phoneNumber = strip_tags($_POST['phoneNumber']);
    $users->service = strip_tags($_POST['service']);
    // Si la requête s'est bien exécutée ($result == TRUE)
    if ($users->addUser()) {
        $executionMessage = 'Le nouvel utilisateur a bien été ajouté.';
    } else {
        $executionMessage = 'Un problème est survenu lors de la tentative d\'ajout d\'un nouvel utilisateur.';
    }
}