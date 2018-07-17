<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 16:06
 */

namespace src\classes\ActiveRecord;


class DB
{

    private $pdo;

    public function connectToDB()
    {
        try {
            $this->pdo = new \PDO("mysql:dbname=STORE_DB;host=localhost", "SERBIN", "SERBIN29");
        }catch (\PDOException $e){
            echo "Error:". $e->getMessage();
        }
        return $this->pdo;
    }

    public function doQuery($sql){
        $this->pdo->query($sql);
    }

    public function getQuery($sql)
    {
        $result = $this->pdo->query($sql);
        return $result;
    }

}