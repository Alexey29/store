<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 11:37
 */

namespace Store\Classes\Authorization;

use Store\Classes\Session\Session;


class Authorization
{
    public $userName;

    public $userId;

    public $obj;

    public function __construct()
    {
//        $this->userName = $userName;
//        $this->userId = $userId;
//        $this->obj = new \Session();
//
//        if(!($this->obj->sessionExists())){
//            echo " session start ";
//            $this->obj->start();
//        }
//
//        $this->obj->set("userName",$this->userName);
//        $this->obj->set("userId",$this->userId);
//        var_dump($_SESSION["userName"]);
//        var_dump($_SESSION["userId"]);

    }

    public function login($userName,$userId){
        $this->userName = $userName;
        $this->userId = $userId;
        $this->obj = new Session();

        if(!($this->obj->sessionExists())){

            $this->obj->start();
        }

        $this->obj->set("userName",$this->userName);
        $this->obj->set("userId",$this->userId);

        var_dump($_SESSION["userName"]);
        var_dump($_SESSION["userId"]);

    }

    public function logout(){
        $this->obj = new Session();

        if(!($this->obj->sessionExists())){

            $this->obj->start();
        }

        $this->obj->delete("userName");
        $this->obj->delete("userId");

        $this->obj->destroy();
    }



}