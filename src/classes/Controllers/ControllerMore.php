<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 10:08
 */

namespace classes;


class ControllerMore
{

    public  function more()
    {
        $obj_Model = new ModelMore();
        $information = $obj_Model->dbinformation();
        $login = $obj_Model->isLogin();
        $obj_View = new ViewMore($information,$login);



    }

}