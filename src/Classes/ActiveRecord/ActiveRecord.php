<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 15:12
 */


namespace Store\Classes\ActiveRecord;

//require "../src/classes/ActiveRecord/DB.php";



class ActiveRecord extends DB
{
    public $tableName;

    public function getAll(){
        $sql = "SELECT * FROM ";
        $sql = $sql.$this->tableName.";";
        $result = $this->getQuery($sql);
        return $result;
    }

    public function getField($field){
        $sql = "SELECT ".$field." FROM ".$this->tableName;
        $result = $this->getQuery($sql);
        return $result;
    }

    public function getFieldChecked($field,$checked_field,$value){
        $sql ="SELECT ".$field." FROM ".$this->tableName." WHERE ".$checked_field." = '".$value . "';";

        $result = $this->getQuery($sql);
        return $result;

    }


}