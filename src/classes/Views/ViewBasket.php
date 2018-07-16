<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 12:02
 */

namespace classes;


class ViewBasket
{
    public function __construct($login)
    {
        require_once "resurses/header.php";
        require_once "resurses/basket.php";
        require_once "resurses/footer.php";
    }

}