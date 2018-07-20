<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 18.07.18
 * Time: 16:21
 */

namespace Store\Classes\ActiveRecord;


class ARAuthors extends ActiveRecord
{
    private $id;

    private $name;

    private $surname;


    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->connectToDB();
    }
}