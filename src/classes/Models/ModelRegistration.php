<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 18.07.18
 * Time: 19:36
 */

namespace classes;


use src\classes\ActiveRecord\ARUsers;

class ModelRegistration
{
    public $email;

    public $password;

    public $userName;

    public $userId;



    public function registration(){
        if($this->dataIsNotEmpty()) {
            if (!($this->isTrueEmail())) {
                $obg = new ARUsers("users");
                $obg->setEmail($_POST["email"]);
                $obg->setPassword($_POST["password"]);
                $obg->setUserName($_POST["user_name"]);
                $obg->addUser();

            } else {
                echo "This email already exist";
            }
        }else{
            echo "input all data";
        }

    }

    public function dataIsNotEmpty(){
        if(!(empty($_POST["email"])) && !(empty($_POST["password"])) && !(empty("user_name"))){
            return true;
        }else{
            return false;
        }
    }


    public function isTrueEmail(){
        $obj = new ARUsers("users");
        $emails = $obj->getField("email");
//        var_dump($emails->fetch());
        $emails = $emails->fetchAll();
        var_dump($emails);
        foreach ($emails as $values){
            if($values["email"] == $_POST["email"]){
                var_dump($values["email"]);
                var_dump($_POST["email"]);

                return true;
            }
        }
        return false;
    }
}