<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 11:58
 */

class Routers
{
     private $routes;

     private $url;


     function __construct()
     {
         $this->routes= require("routs.php");
         $this->url = $_SERVER("REQUEST_URI");
     }


     function run(){
         $mas = $this->GetR();

         $controllerName = $mas["controller"];
         $actionName = $mas["action"];


         $obj = new $controllerName();
         $obj->$actionName();

     }


     function GetR(){
         $str=explode("?",$this->url);
         $str[0];

         foreach ($this->routes as $k=>$v){
             if($k==$str){
                 return $v;
             }
         }
     }



}