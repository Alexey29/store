<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 11:58
 */

namespace Store\Classes\Router;

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
         $mas = $this->GetR();


         if($mas==null){
             echo "Page not found!";
             $obj = new ControllerPageNotFound();
             $obj->PageNotFound();

         }else {
             if ($mas["action"] == "more" && $_GET["id"] == null) {
                 $obj = new ControllerPageNotFound();
                 $obj->PageNotFound();
             } else {
                 $controllerName = $mas["controller"];
                 $actionName = $mas["action"];

                 $obj = new $controllerName();

                 $obj->$actionName();
             }
         }

     }


     function GetR(){
         $str = explode("/",$this->url);
         $str = $str[1];

         $s = explode("?",$str);
         echo "<br>";

         echo"<br>";

         foreach ($this->routes as $k=>$v){
             if($k==$s[0]){
                 return $v;
             }
         }


     }



}