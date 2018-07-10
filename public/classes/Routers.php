<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 11:58
 */

namespace app\classes;

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
         $mas = $this->GetR();

//         $controllerName = $mas["controller"];
//         $actionName = $mas["action"];
//
//
//         $obj = new $controllerName();
//         $obj->$actionName();
     }


     function GetR(){

         $str=explode("/public",$this->url);
         $str = $str[1];
         var_dump($str);
         echo"<br>";
//         $s=explode("?",$str[2]);
//         var_dump($s[0]);
//
//         foreach ($this->routes as $k=>$v){
//             if($k==$str){
//                 var_dump($v);
//                 return $v;
//             }
//         }
     }



}