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
            $this->pdo = new \PDO("mysql:dbname=store;host=localhost", "root", "");
        }catch (\PDOException $e){
            echo "Error:". $e->getMessage();
        }
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