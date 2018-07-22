<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 12:42
 */


namespace classes;



class ControllerPages
{

    function  __construct(){

    }

    public function home(){
//        echo "Hi!";
        $obj = new ModelHome();
    }

    public  function basket(){
//        echo" action basket";
        $obj = new ModelBasket();
    }

    public  function more()
    {
        $obj = new ModelMore();

    }

    public  function login(){
        echo"login";
    }

    public  function PageNotFound(){
        require_once "resurses/404.php";
    }


}