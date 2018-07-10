<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 12:48
 */


namespace Store\classes;

class Application
{
     private $url;


     function __construct()
     {
         $this->url = $_SERVER("REQUEST_URI");

     }
}