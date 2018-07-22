<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 11:58
 */

namespace Store\Classes\Router;

use Store\Classes\ActiveRecord\ARBooks;
use Store\Classes\Controllers\ControllerPageNotFound;

class Routers
{
     private $routes;

     private $url;


     function __construct()
     {
         $this->routes= require("routs.php");
         $this->url = $_SERVER["REQUEST_URI"];
     }


     function run(){
         $array = $this->GetR();
         if($array==null){
             $this->pageNotFound();
         }else {
             if ($array["action"] == "more" && (!isset($_GET["id"]) || !$this->existBookId($_GET["id"]))) {
                 $this->pageNotFound();
             } else {
                 $controllerName = $array["controller"];
                 $actionName = $array["action"];
                 $obj = new $controllerName();
                 $obj->$actionName();
             }
         }

     }


     function GetR(){
         $str = explode("/",$this->url);
         $str = $str[1];
         $s = explode("?",$str);
         foreach ($this->routes as $k=>$v){
             if($k==$s[0]){
                 return $v;
             }
         }
         return null;
     }

     private function pageNotFound(){
         $obj = new ControllerPageNotFound();
         $obj->PageNotFound();
     }

     private function existBookId($id){
         $obj = new ARBooks("books");
         $ids = $obj->getField("id");
         $ids = $ids->fetchAll();

         foreach ($ids as $k=>$v){
             if($v["id"] == $id){
                 return true;
             }
         }
         return false;
     }



}