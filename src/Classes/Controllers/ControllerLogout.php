<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 17:52
 */

namespace Store\Classes\Controllers;

use Store\Classes\Models\ModelLogout;

class ControllerLogout
{
    public function logout(){
        $obj = new ModelLogout();
        $obj->logout();
    }

}