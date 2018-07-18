<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 17:11
 */

namespace src\classes\ActiveRecord;


class ARUsers extends ActiveRecord
{
    private $id;

    private $userName;

    private $email;

    private $password;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->connectToDB();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setUserName($userName){
        $this->userName = $userName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function addUser(){
        $sql = "INSERT INTO ".$this->tableName." VALUES (".$this->userName.",".$this->email.",".$this->password.")" ;
    }



}