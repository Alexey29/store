<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 17:11
 */

namespace classes;


use src\classes\ActiveRecord\ARBooks;

class ModelHome
{

    private $information;

    public function __construct()
    {

    }

    public function dbInformation(){
        $obj = new ARBooks("books");
        $data =  $obj->getAll();
//        var_dump($data);
        $data = $data->fetchAll();
//        var_dump($data);
//        $this->information = require("resurses/inform.php");
        $this->information = $data;
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