<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:55
 */

namespace Store\Classes\Models;


use Store\Classes\ActiveRecord\AROrders;
use Store\Classes\ActiveRecord\AROrders_books;
use Store\Classes\Session\Session;



class ModelBasket{

    public function __construct()
    {
    }

    public function isLogin(){
        $ses = new Session();
        if ($ses->cookieExists()) {
            $ses->start();
            if (!(empty($_SESSION["userName"]))) {
                return true;
            }
        }
        return false;
    }

    public function buy_books(){
        $ses = new Session();
        $ses->start();
        $obj = new AROrders("orders");
        $id_order = $obj->addOrder($_SESSION["userId"]);
        $obj = new AROrders_books("orders_books");
        foreach ($_SESSION["products"] as $k=>$v){
            $obj->addBookInOrder($id_order,$v["product_id"]);
            }

    }

}