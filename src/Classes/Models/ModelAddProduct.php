<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 12:15
 */

namespace Store\Classes\Models;


use Store\Classes\ActiveRecord\ARBooks;
use Store\Classes\Session\Session;

class ModelAddProduct
{
    public function addProduct()
    {
        $obj = new Session();
        $obj->start();

        if(isset($_SESSION["products"]))
        {
            $id_exist = false;
            foreach ($_SESSION["products"] as $k=>$v)
            {
                if($v["product_id"] == $_GET["id"]){
                    $_SESSION["products"][$k]["count"]++;
                    $v["count"]++;
                    $id_exist = true;
                }
            }
            if(!($id_exist)){
                $information = $this->getBookData();
                $product = array(
                    "product_id"=>$_GET["id"],
                    "count"=>1,
                    "book_name"=>$information["name"],
                    "price"=>$information["price"],
                    "route_to_img"=>$information["route_to_img"]
                );

                $_SESSION["products"][] = $product;

            }
        }else{
            $information = $this->getBookData();
            $product = array(
                "product_id"=>$_GET["id"],
                "count"=>1,
                "book_name"=>$information["name"],
                "price"=>$information["price"],
                "route_to_img"=>$information["route_to_img"]
            );

            $_SESSION["products"][] = $product;

        }

    }

    private function getBookData(){
        $obj_ARBooks = new ARBooks("books");
        $information = $obj_ARBooks->getFieldChecked("name,price,route_to_img","id",$_GET["id"]);
        $information = $information->fetch();

        return $information;
    }

    public function addOne(){
        $obj = new Session();
        $obj->start();

        foreach ($_SESSION["products"] as $k=>$v){
            if($v["product_id"] == $_GET["id"]){
                $_SESSION["products"][$k]["count"]++;
            }
        }
    }


    public function removeOne(){
        $obj = new Session();
        $obj->start();

        foreach ($_SESSION["products"] as $k=>$v){
            if($v["product_id"] == $_GET["id"]){
                if($_SESSION["products"][$k]["count"]>1) {
                    $_SESSION["products"][$k]["count"]--;
                }
            }
        }
    }

    public function remove(){
        $obj = new Session();
        $obj->start();

        foreach ($_SESSION["products"] as $k=>$v){
            if($v["product_id"] == $_GET["id"]){
                unset($_SESSION["products"][$k]);
                if(0 == count($_SESSION["products"])){
                    unset($_SESSION["products"]);
                }
            }
        }
    }

    public function removeAll(){
        $obj = new Session();
        if(!($obj->sessionExists())) {
            $obj->start();
        }
        if($obj->contains("products")) {
            unset($_SESSION["products"]);
        }
    }

}