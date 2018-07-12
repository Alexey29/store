<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 10:12
 */

namespace classes;


class ViewHome
{
    private $information;

    public function __construct($information)
    {
        $this->information=$information;
//        echo"!!!!!!!!!!!!!!!!!!!!!!1";
        require_once "resurses/home.php";
    }

}