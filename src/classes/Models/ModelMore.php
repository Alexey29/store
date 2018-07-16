<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 15:47
 */

namespace classes;


class ModelMore
{
//    public $information;

    public function __construct()
    {
//        $this->getinformation();
//        $obj = new ViewMore($this->information);

    }


    public function dbinformation(){
        $information = require_once ("resurses/inform.php");
        foreach ($information as $k=>$v){
            if($_GET["id"]==$v["id"]){
                return $v;
            }
        }
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


}