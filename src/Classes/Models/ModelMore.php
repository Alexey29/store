<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 15:47
 */

namespace Store\Classes\Models;


use Store\Classes\ActiveRecord\ARAuthors;
use Store\Classes\ActiveRecord\ARBook_authors;
use Store\Classes\ActiveRecord\ARBooks;
use Store\Classes\ActiveRecord\ARComments;
use Store\Classes\ActiveRecord\ARUsers;
use Store\Classes\Session\Session;

class ModelMore
{

    public function __construct()
    {

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



        return $information;


    }

    public function isLogin()
    {
        $ses = new Session();
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

        $comments = $comments->fetchAll();

        $obj = new ARUsers("users");
        $information_comments = [];

        foreach ($comments as $k => $v) {
            $userName = $obj->getFieldChecked("name", "id", $v["fk_user"]);
            $userName = $userName->fetch();

            $information_comments[] = array(
                "comment" => $v["comment"],
                "user_name" => $userName["name"],
                "id_book" => $v["fk_book"]
            );
        }
        return $information_comments;

    }

    public function addComment(){
        if(!(empty($_POST["comment"]))) {
            $ses = new Session();
            $ses->start();

            $obj = new ARComments("comments");
            $comment = addslashes($_POST["comment"]);
            $comment = strip_tags($comment);
            $obj->setComment($_GET["id"], $_SESSION["userId"], $comment);
            header("Location: more?id=".$_GET["id"]);
        }else{
            header("Location: more?id=".$_GET["id"]);
        }
    }
}