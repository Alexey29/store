<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 10:07
 */

namespace Store\Classes\Controllers;

use Store\Classes\Models\ModelBasket;
use Store\Classes\Views\ViewBasket;
use Store\Classes\Models\ModelAddProduct;


class ControllerBasket
{

    public  function basket(){
//        echo" action basket";
        $obj_Model = new ModelBasket();
        $login = $obj_Model->isLogin();
        $obj_View = new ViewBasket($login);

    }

    public function buy_books(){
        $obj = new ModelBasket();
        $obj->buy_books();
        $obj = new ModelAddProduct();
        $obj->removeAll();
        header("Location: http://test1.local/basket");

    }


}