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
    public $information;

    public function __construct()
    {
        $this->getinformation();
        $obj = new ViewMore($this->information);

    }

    public function getinformation(){
        $this->information =require_once ("resurses/inform.php");
        foreach ($this->information as $k=>$v){
            if($_GET["id"]==$v["id"]){
                $this->information = $v;
            }
        }
    }


}