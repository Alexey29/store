<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 11:58
 */

namespace classes;

class Routers
{
     private $routes;

     private $url;


     function __construct()
     {
         $this->routes= require("routs.php");
         $this->url = $_SERVER["REQUEST_URI"];
         var_dump($_SERVER['REQUEST_URI']);
     }


     function run(){
         $mas = $this->GetR();

         var_dump($mas);

         $controllerName = $mas["controller"];
         $actionName = $mas["action"];


         $obj = new $controllerName();
         $obj->$actionName();
     }


     function GetR(){

         $str = explode("/",$this->url);
         $str = $str[1];
         var_dump($str);
         $s = explode("?",$str);
         echo "<br>";
         var_dump($s);
         echo"<br>";

         foreach ($this->routes as $k=>$v){
             if($k==$s[0]){
                 return $v;
             }
         }
     }



}