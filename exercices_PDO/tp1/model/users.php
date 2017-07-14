<?php

class users extends db {

    public $lastName;
    public $firstName;
    public $birthDate;
    public $address;
    public $postalCode;
    public $phoneNumber;
    public $service;
    public $regexName = '/^([A-Z]?[a-zàéèôùïäöç]+([ ]?[a-zàéèôùïäöç]?[\'-]?[A-Z]?[a-zàéèôùïäöç]+)*)$/';
    public $regexPhone = '/^[0][0-9]{9}$/';
    public $regexPostalCode = '/^[0-9]{5}$/';
    public $id;
    public $serviceId = 0;

    public function __construct() {
        parent::__construct();
        $this->connect();
    }

    // Méthode qui affiche les utilisateurs en fonction du choix de tri
    public function getUsersList() {
        if ($this->serviceId == 0) {
            $result = $this->pdo->query('SELECT `users`.`id`, `users`.`lastName`, `users`.`firstName`, TIMESTAMPDIFF(YEAR, `users`.`birthDate`, CURDATE()) AS `age`, `users`.`address`, `users`.`postalCode`, `users`.`phoneNumber`, `users`.`service`, `services`.`name` '
            . 'FROM `users` INNER JOIN `services` ON `users`.`service` = `services`.`id` ');
        } else {
            $result = $this->pdo->query('SELECT `users`.`id`, `users`.`lastName`, `users`.`firstName`, TIMESTAMPDIFF(YEAR, `users`.`birthDate`, CURDATE()) AS `age`, `users`.`address`, `users`.`postalCode`, `users`.`phoneNumber`, `users`.`service`, `services`.`name` '
            . 'FROM `users` INNER JOIN `services` ON `users`.`service` = `services`.`id` '
            . 'WHERE `users`.`service` =' . $this->serviceId . '');
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    // Méthode qui ajoute un utilisateur dans la base de données
    public function addUser() {
        // On prépare notre requête qui va ajouter les valeurs dans la base de données
        $newUser = $this->pdo->prepare('INSERT INTO `users` (`lastName`, `firstName`, `birthDate`, `address`, `postalCode`, `phoneNumber`, `service`) VALUES (:lastName, :firstName, :birthDate, :address, :postalCode, :phoneNumber, :service)');
        // On bind ces valeurs
        $newUser->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $newUser->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $newUser->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $newUser->bindValue(':address', $this->address, PDO::PARAM_STR);
        $newUser->bindValue(':postalCode', $this->postalCode, PDO::PARAM_INT);
        $newUser->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_INT);
        $newUser->bindValue(':service', $this->service, PDO::PARAM_INT);
        // On exécute la requête et on stocke le booléen qu'elle renvoie dans $result
        $result = $newUser->execute();
        // On retourne le résultat de l'exécution
        return $result;
    }

    // Méthode qui supprime un utilisateur de la base de données
    public function deleteUser() {
        // On prépare la requête qui va supprimer l'utilisateur avec l'id récupéré via le bouton "Supprimer"
        $deleteUser = $this->pdo->prepare('DELETE FROM `users` WHERE `id` = :id ');
        // On bind ces valeurs
        $deleteUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteUser->execute();
    }

}
