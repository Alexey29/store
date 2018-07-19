<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 15:47
 */

namespace classes;


use src\classes\ActiveRecord\ARAuthors;
use src\classes\ActiveRecord\ARBook_authors;
use src\classes\ActiveRecord\ARBooks;
use src\classes\ActiveRecord\ARComments;
use src\classes\ActiveRecord\ARUsers;

class ModelMore
{
//    public $information;

    public function __construct()
    {
//        $this->getinformation();
//        $obj = new ViewMore($this->information);

    }


    public function dbinformation()
    {
        $obj = new ARBooks("books");
        $information = $obj->getFieldChecked("name,number_of_pages,review,price,route_to_img", "id", $_GET["id"]);
        $information = $information->fetch();


        $obj = new ARBook_authors("books_authors");
        $id_author = $obj->getFieldChecked("fk_author", "fk_book", $_GET["id"]);
        $id_author = $id_author->fetch();


        $obj = new ARAuthors("authors");
        $author_name = $obj->getFieldChecked("name,surname", "id", $id_author["fk_author"]);
        $author_name = $author_name->fetch();


        $str_name_author = $author_name["name"] . " " . $author_name["surname"];

        $information["author_name"] = $str_name_author;
        var_dump($information);


        return $information;


//        $information = require_once ("resurses/inform.php");
//        foreach ($information as $k=>$v){
//            if($_GET["id"]==$v["id"]){
//                return $v;
//            }
//        }
    }

    public function isLogin()
    {
        $ses = new \Session();
        if ($ses->cookieExists()) {
            $ses->start();
            if (!(empty($_SESSION["userName"]))) {
                return true;
            }
        }
        return false;

    }

    public function dbcomments()
    {
        $obj = new ARComments("comments");
        $comments = $obj->getAll();
//        var_dump($comments);
        $comments = $comments->fetchAll();
//        var_dump($comments);
        $obj = new ARUsers("users");
        $information_comments = [];

        foreach ($comments as $k => $v) {
            $userName = $obj->getFieldChecked("name", "id", $v["fk_user"]);
            $userName = $userName->fetch();
//            var_dump($userName);
            $information_comments[] = array(
                "comment" => $v["comment"],
                "user_name" => $userName["name"],
                "id_book" => $v["fk_book"]
            );
        }
        return $information_comments;

    }

    public function moreComment(){
        if(!(empty($_POST["comment"]))) {
            $ses = new \Session();
            $ses->start();

            $obj = new ARComments("comments");
            $obj->setComment($_GET["id"], $_SESSION["userId"], $_POST["comment"]);
//            header("Location: http://test1.local/more?id=".$_GET["id"]);
        }else{
//            header("Location: http://test1.local/more?id=".$_GET["id"]);
        }
    }
}