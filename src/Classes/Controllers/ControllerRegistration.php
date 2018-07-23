<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 18.07.18
 * Time: 19:35
 */

namespace Store\Classes\Controllers;

use Store\Classes\Models\ModelRegistration;


class ControllerRegistration
{
    public function registration(){
        $obj = new ModelRegistration();
        $obj->registration();
        header("Location: /");

    }

}