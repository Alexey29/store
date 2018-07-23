<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 10:08
 */

namespace Store\Classes\Controllers;

use Store\Classes\Models\ModelMore;
use Store\Classes\Views\ViewMore;

class ControllerMore
{

    public  function more()
    {
        $obj_Model = new ModelMore();
        $information = $obj_Model->dbinformation();
        $obj_Model->dbcomments();
        $information_comments = $obj_Model->dbcomments();
        $login = $obj_Model->isLogin();
        $obj_View = new ViewMore($information,$login,$information_comments);



    }

    public function addComment(){
        $obj = new ModelMore();
        $obj->addComment();
    }

}