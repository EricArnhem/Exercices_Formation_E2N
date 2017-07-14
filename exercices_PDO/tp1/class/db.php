<?php

class db {

    private $host;
    protected $pdo;
    private $login;
    private $pwd;
    private $db;

    protected function __construct() {
        $this->host = HOST;
        $this->login = LOGIN;
        $this->pwd = PWD;
        $this->db = DB;
    }

    protected function connect() {
        try {
            // Instancie le nouvel objet PDO avec la requête de connexion à la base de données users
            $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=utf8', $this->login, $this->pwd);
        }
        // Si il y a une erreur on "attrape" l'exception dans $e et on affiche un message d'erreur
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

}
