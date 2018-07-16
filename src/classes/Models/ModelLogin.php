<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 11:55
 */

namespace classes;


use src\classes\Authorization\Authorization;

class ModelLogin
{
    public $email;

    public $password;

    public $userName;

    public $userId;

    public function __construct()
    {
        $this->email = "email";
        $this->password = "123";
        $this->userName = "name";
        $this->userId = "id";
        $this->login();
    }

    public function checkData(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            return true;
        }else{
            return false;
        }
    }

    public function login(){
        $obj = new Authorization();
        $obj->login($this->userName,$this->userId);
        header("Location: http://test1.local/");
    }






}