<?php

namespace App;

use PDO;

class Connection
{
    public static function make($parametros){
        try {
            return new \PDO("mysql:host=localhost;port=3306;dbname=${parametros}",'batoi','1234');
        }catch (\PDOException $e){
            echo $e->getMessage();
            die();
        }

    }


}