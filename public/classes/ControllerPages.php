<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 12:42
 */

namespace classes;

class ControllerPages
{

    function  __construct(){

    }

    public function home(){
        echo "Hi!";
        $obj = new ModelHome();



    }


}