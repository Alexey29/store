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

    }

    public function dbInformation(){
        $this->information = require("resurses/inform.php");
    }

    public function isLogin(){
        $ses = new \Session();
        if ($ses->cookieExists()) {
            $ses->start();
            if(!(empty($_SESSION["userName"]))){
                return true;
            }
        }
        return false;

    }

    /**
     * @return mixed
     */
    public function getInformation()
    {
        return $this->information;
    }

}