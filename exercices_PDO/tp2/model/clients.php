<?php

class clients extends db {

    public $lastName;
    public $firstName;
    public $birthDate;
    public $address;
    public $postalCode;
    public $phoneNumber;
    public $maritalStatus;
    public $clientId;

    public function __construct() {
        parent::__construct();
        $this->connect();
    }

    // Méthode pour afficher les clients
    public function getClientsList() {
        $query = $this->pdo->query('SELECT `id`, `lastName`, `firstName` FROM `client`');
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // Méthode pour récupérer les infos personnelles d'un client
    public function getClientInfos() {
        $query = $this->pdo->query('SELECT `client`.`id`, `lastName`, `firstName`, `birthDate`, `address`, `postalCode`, `phoneNumber`, `maritalStatus`, `maritalStatus`.`status` '
                . 'FROM `client` INNER JOIN `maritalStatus` ON `client`.`maritalStatus` = `maritalStatus`.`id`'
                . 'WHERE `client`.`id` = ' . $this->clientId . '');
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // Méthode qui ajoute un client dans la base de données
    public function createClient() {
        // On prépare notre requête qui va ajouter les valeurs dans la base de données
        $newClient = $this->pdo->prepare('INSERT INTO `client` (`lastName`, `firstName`, `birthDate`, `address`, `postalCode`, `phoneNumber`, `maritalStatus`) VALUES (:lastName, :firstName, :birthDate, :address, :postalCode, :phoneNumber, :maritalStatus)');
        // On bind ces valeurs
        $newClient->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $newClient->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $newClient->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $newClient->bindValue(':address', $this->address, PDO::PARAM_STR);
        $newClient->bindValue(':postalCode', $this->postalCode, PDO::PARAM_INT);
        $newClient->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_INT);
        $newClient->bindValue(':maritalStatus', $this->maritalStatus, PDO::PARAM_INT);
        // On exécute la requête et on stocke le booléen qu'elle renvoie dans $result
        $result = $newClient->execute();
        // On retourne le résultat de l'exécution
        return $result;
    }

}
