<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 11:55
 */

namespace Store\Classes\Models;


use Store\Classes\ActiveRecord\ARUsers;
use Store\Classes\Authorization\Authorization;

class ModelLogin
{
    public $email;

    public $password;

    public $userName;

    public $userId;

    public function __construct()
    {

        if($this->checkData()) {
            $this->getData();
            $this->login();
        }else{
            header("Location: /");
        }
    }

    public function checkData(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            return true;
        }else{
            return false;
        }
    }

    public function isTrueEmail(){
        $obj = new ARUsers("users");
        $emails = $obj->getField("email");

        $emails = $emails->fetchAll();

        $email = $_POST["email"];
        $email = strip_tags($email);
        $email = addslashes($email);
        foreach ($emails as $values){
            if($values["email"] == $email){
                $this->email = $values["email"];

                return true;
            }
        }
        return false;
    }

    public function isTruePassword(){
        $obj = new ARUsers("users");
        $password = $obj->getFieldChecked("password","email",$this->email);
        $password = $password->fetch();

        $get_password = $_POST["password"];
        $get_password = strip_tags($get_password);
        $get_password = addslashes($get_password);
        $get_password = md5($get_password);
        if($password["password"] == $get_password){
            $this->password = $password["password"];

            return true;
        }else{
            return false;
        }
    }

    public function getData(){
        $obj = new ARUsers("users");
        $obj->connectToDB();
        if($this->isTrueEmail()){
            if($this->isTruePassword()){
                $name = $obj->getFieldChecked("name","email",$this->email);
                $name = $name->fetch();
                $this->userName = $name["name"];
                $userId = $obj->getFieldChecked("id","email",$this->email);
                $userId = $userId->fetch();
                $this->userId = $userId["id"];
            }else{
                header("Location: /");
            }
        }else{
            header("Location: /");
        }
    }



    public function login(){
        $obj = new Authorization();
        $obj->login($this->userName,$this->userId);
        header("Location: /");
    }






}