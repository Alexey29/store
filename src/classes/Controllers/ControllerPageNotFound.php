<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 10:09
 */

namespace classes;


class ControllerPageNotFound
{
    public function __construct()
    {
    }

    public  function PageNotFound(){
        $obj = new ViewPageNotFound();
        $obj->PageNotFound();
    }

}