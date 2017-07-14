<?php

class services extends db {

    public function __construct() {
        parent::__construct();
        $this->connect();
    }

    public function getServicesList() {
        $result = $this->pdo->query('SELECT `id`, `name` FROM `services`');
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

}
