<?php

class maritalStatus extends db{
    
    public function __construct(){
        parent::__construct();
        $this->connect();
    }
    // Méthode qui retourne la liste des statuts maritaux
    public function getStatusList(){
        $query = $this->pdo->query('SELECT `id`, `status` FROM `maritalStatus`');
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
