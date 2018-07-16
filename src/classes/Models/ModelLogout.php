<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 17:53
 */

namespace classes;


use src\classes\Authorization\Authorization;

class ModelLogout
{

    public function logout(){
        $obj = new Authorization();
        $obj->logout();
        header("Location: http://test1.local/");

    }
}