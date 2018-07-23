<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 17:11
 */

namespace Store\Classes\ActiveRecord;

//use Store\Classes\ActiveRecord\ActiveRecord;

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
        $userName = strip_tags($userName);
        $userName = addslashes($userName);
        $this->userName = $userName;
    }

    public function setEmail($email){
        $email = strip_tags($email);
        $email = addslashes($email);
        $this->email = $email;
    }

    public function setPassword($password){
        $password = strip_tags($password);
        $password = addslashes($password);
        $password =md5($password);
        $this->password = $password;
    }

    public function addUser(){
        $sql = "INSERT INTO ".$this->tableName."( name ,email,password".") VALUES ("."'".$this->userName."'".","."'".$this->email."'".","."'".$this->password."'".");" ;
        $this->doQuery($sql);
    }



}