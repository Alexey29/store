<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 16:06
 */

namespace Store\Classes\ActiveRecord;


class DB
{

    protected $pdo;

    public function connectToDB()
    {
        try {
            $this->pdo = new \PDO("mysql:dbname=STORE_DB;host=localhost", "SERBIN", "SERBIN29");
        }catch (\PDOException $e){
            echo "Error:". $e->getMessage();
            echo "!!!!!!!!!!!!!!!!!!!!!!11";
        }
    }

    public function doQuery($sql){
       var_dump($this->pdo->query($sql));
    }

    public function getQuery($sql)
    {
        $result = $this->pdo->query($sql);
        return $result;
    }

}