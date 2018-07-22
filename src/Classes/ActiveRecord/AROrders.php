<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 20.07.18
 * Time: 10:34
 */

namespace Store\Classes\ActiveRecord;


class AROrders extends ActiveRecord
{
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->connectToDB();
    }

    public function addOrder($id_user){
        $sql = "INSERT INTO ".$this->tableName." (fk_user) VALUE ('".$id_user."');";
        $this->doQuery($sql);
        return $this->pdo->lastInsertId($this->tableName);
    }

}