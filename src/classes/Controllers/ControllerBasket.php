<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 10:07
 */

namespace classes;


class ControllerBasket
{

    public  function basket(){
//        echo" action basket";
        $obj_Model = new ModelBasket();
        $login = $obj_Model->isLogin();
        $obj_View = new ViewBasket($login);

    }


}