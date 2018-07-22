<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 10:12
 */

namespace Store\Classes\Views;


class ViewHome
{
    private $information;

    public function __construct($information,$login )
    {
        require_once "resurses/header.php";

        require_once "resurses/home.php";

        require_once "resurses/footer.php";
    }

}