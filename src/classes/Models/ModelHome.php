<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 17:11
 */

namespace classes;


class ModelHome
{

    private $information;

    public function __construct()
    {
//        echo "MODEL";
        $this->information = require("resurses/inform.php");
        $obj = new ViewHome($this->information);
    }

}