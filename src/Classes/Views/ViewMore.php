<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 16:23
 */

namespace Store\Classes\Views;


class ViewMore
{
    public $information;

    public function __construct($information,$login,$information_comments)
    {
        require_once "resurses/header.php";

        require_once "resurses/more.php";

        require_once "resurses/footer.php";
    }

}