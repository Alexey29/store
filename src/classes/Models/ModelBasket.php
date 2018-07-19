<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:55
 */

namespace classes;


class ModelBasket{

    public function __construct()
    {
    }

    public function isLogin(){
        $ses = new \Session();
        if ($ses->cookieExists()) {
            $ses->start();
            if (!(empty($_SESSION["userName"]))) {
                return true;
            }
        }
        return false;
    }

}