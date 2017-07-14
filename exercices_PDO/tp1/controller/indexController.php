<?php

// On instancie l'objet users
$users = new users();

// Suppression d'un utilisateur
// On initialise $deleteSentence à chaîne vide pour éviter une erreur
$deleteSentence = '';
// Si $_POST['deleteUserButton'] existe, on stocke sa valeur dans $users->id
if (isset($_POST['deleteUserButton'])) {
    $users->id = $_POST['deleteUserButton'];
    // Si la requête s'est bien exécutée ($result == TRUE)
    if ($users->deleteUser()) {
        $deleteSentence = 'L\'utilisateur a bien été supprimé.';
    } else {
        $deleteSentence = 'Un problème est survenu lors de la tentative de suppression de l\'utilisateur.';
    }
}

// Affichage des utilisateurs
// Si $_POST['sortServices'] existe, on stocke sa valeur dans $users->serviceId
if (isset($_POST['sortServices'])) {
    $users->serviceId = $_POST['sortServices'];
}
// On appelle la méthode getUserList() qui liste les différents utilisateurs
$user = $users->getUsersList();

// On instancie l'objet services
$services = new services();

// Affichage des services
// On appelle la méthode getServicesList() qui liste les différents services
$service = $services->getServicesList();
