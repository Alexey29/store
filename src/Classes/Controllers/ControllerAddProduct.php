<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 12:13
 */

namespace Store\Classes\Controllers;

use Store\Classes\Models\ModelAddProduct;


class ControllerAddProduct
{
    public function addProduct(){
        $obj = new ModelAddProduct();
        $obj->addProduct();
        header("Location: http://test1.local/basket");
    }

    public function addOne(){
        $obj = new ModelAddProduct();
        $obj->addOne();
        header("Location: http://test1.local/basket");
    }

    public function removeOne(){
        $obj = new ModelAddProduct();
        $obj->removeOne();
        header("Location: http://test1.local/basket");
    }

    public function remove(){
        $obj = new ModelAddProduct();
        $obj->remove();
        header("Location: http://test1.local/basket");
    }

    public function removeAll(){
        $obj =new ModelAddProduct();
        $obj->removeAll();
        header("Location: http://test1.local/basket");
    }
}