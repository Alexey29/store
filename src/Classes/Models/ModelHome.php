<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 17:11
 */

namespace Store\Classes\Models;


use Store\Classes\ActiveRecord\ARBooks;
use Store\Classes\Session\Session;

class ModelHome
{

    private $information;

    public function __construct()
    {

    }

    public function dbInformation(){
        $obj = new ARBooks("books");
        $data =  $obj->getAll();

        $data = $data->fetchAll();

        $this->information = $data;
    }

    public function isLogin(){
        $ses = new Session();
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