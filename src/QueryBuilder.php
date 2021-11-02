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
    public function insert($nomtaula, $camps){
        $arrayKeySeparadoPorComas = implode("`,`", array_keys($camps));
        $campsInsertar = implode("','", $camps);
        $stpdo = $this->conn->prepare(" insert into $nomtaula (`$arrayKeySeparadoPorComas`) values ('$campsInsertar')");
        $stpdo->execute();
    }

    public function login($table,$email,$password){
        $stpdo = $this->conn->prepare("SELECT * FROM $table WHERE email = :email");
        $stpdo->bindValue(":email",$email);
        $stpdo->execute();
        $user = $stpdo->fetch(\PDO::FETCH_OBJ);
        if ($password === $user->password){
            return $user;
        }else{
            return null;
        }
    }

    public function findByDni($tabla, $dni){
        $pdoST = $this->conn->prepare("SELECT * FROM `$tabla` where `dni` = '$dni'");
        $pdoST->execute();
        return $pdoST->fetchAll(PDO::FETCH_OBJ);
    }

    public function findWord($tabla,$id){
        $pdoST = $this->conn->prepare("SELECT * FROM `$tabla` where `id` = '$id'");
        $pdoST->execute();
        return $pdoST->fetch(PDO::FETCH_OBJ);
    }
}
