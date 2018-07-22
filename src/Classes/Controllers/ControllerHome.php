<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 12:42
 */


namespace Store\Classes\Controllers;

use Store\Classes\Models\ModelHome;
use Store\Classes\Views\ViewHome;

class ControllerHome
{

    function  __construct(){

    }

    public function home(){
        $obj_Model = new ModelHome();
        $obj_Model->dbInformation();
        $information = $obj_Model->getInformation();
        $login = $obj_Model->isLogin();
        $obj_View = new ViewHome($information,$login);
    }









}