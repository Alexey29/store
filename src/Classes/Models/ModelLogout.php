<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 17:53
 */

namespace Store\Classes\Models;


use Store\Classes\Authorization\Authorization;


class ModelLogout
{

    public function logout(){
        $obj = new Authorization();
        $obj->logout();
        header("Location: /");

    }
}