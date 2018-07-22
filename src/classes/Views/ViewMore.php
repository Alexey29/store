<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 16:23
 */

namespace classes;


class ViewMore
{
    public $information;

    public function __construct($information)
    {
//        echo "view more";
        $this->information=$information;
        require_once "resurses/more.php";
    }

}