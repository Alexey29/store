<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 20.07.18
 * Time: 10:33
 */

namespace Store\Classes\ActiveRecord;


class AROrders_books extends ActiveRecord
{
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->connectToDB();
    }

    public function addBookInOrder($id_order,$id_book){
        $sql = "INSERT INTO ".$this->tableName." (fk_order, fk_book) VALUE ('".$id_order."',"."'".$id_book."');";
        $this->doQuery($sql);
    }
}