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
        require_once "resources/header.php";

        require_once "resources/home.php";

        require_once "resources/footer.php";
    }

}