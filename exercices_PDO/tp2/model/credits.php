<?php

class credits extends db{
    
    public $organization;
    public $amount;
    public $clientRef;
    public $clientId;
    
    public function __construct(){
        parent::__construct();
        $this->connect();
    }
    // Méthode qui permet d'ajouter un crédit à un client
    public function addCredit(){
        // On prépare notre requête qui va ajouter les valeurs dans la base de données
        $newCredit = $this->pdo->prepare('INSERT INTO `credit` (`organization`, `amount`, `clientRef`) VALUES (:organization, :amount, :clientRef)');
        // On bind ces valeurs
        $newCredit->bindValue(':organization', $this->organization, PDO::PARAM_STR);
        $newCredit->bindValue(':amount', $this->amount, PDO::PARAM_INT);
        $newCredit->bindValue(':clientRef', $this->clientRef, PDO::PARAM_INT);
        // On exécute la requête et on stocke le booléen qu'elle renvoie dans $result
        $result = $newCredit->execute();
        // On retourne le résultat de l'exécution
        return $result;
    }
    
    // Méthode qui liste les crédits d'un utilisateur
    public function getCreditList(){
        $query = $this->pdo->query('SELECT `organization`, `amount` '
                . 'FROM `credit`'
                . 'WHERE `credit`.`clientRef` = ' . $this->clientId . '');
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}