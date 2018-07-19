<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 17:38
 */

namespace src\classes\ActiveRecord;


class ARComments extends ActiveRecord
{
    public $id_comment;

    public $id_user;

    public $id_book;

    public $comment;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->connectToDB();
    }

    public function setComment($id_book,$id_user,$comment){
        $sql="INSERT INTO ".$this->tableName." (fk_book, fk_user, comment)"."VALUES ("."'".$id_book."'".","."'".$id_user."'".","."'".$comment."'".");";
        $this->doQuery($sql);

    }

}