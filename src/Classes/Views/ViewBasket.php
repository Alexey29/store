<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 12:02
 */

namespace Store\Classes\Views;


class ViewBasket
{
    public function __construct($login)
    {
        require_once "resources/header.php";

        require_once "resources/basket.php";

        require_once "resources/footer.php";
    }

}