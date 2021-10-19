<?php

namespace App;
use PDO;

class QueryBuilder{

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }
    public function selectAll($tabla){
        $pdoSt = $this->conn->prepare("SELECT * FROM $tabla");
        $pdoSt->execute();
        return $pdoSt->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($tabla,$array){
        $text = implode("','",$array);
        $insert = $this->conn->prepare("insert into `$tabla` (`dni`, `nom`, `dataNaixement`, `sexe`, `hobby`) VALUES ('$text');");
        $insert->execute();
    }

    public function findByDni($tabla, $dni){
        $pdoST = $this->conn->prepare("SELECT * FROM `$tabla` where `dni` = '$dni'");
        $pdoST->execute();
        return $pdoST->fetchAll(PDO::FETCH_OBJ);
    }
}
