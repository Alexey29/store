<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 18.07.18
 * Time: 15:32
 */

namespace Store\Classes\ActiveRecord;


class ARBooks extends ActiveRecord
{
    private $id;

    private $name;

    private $number_of_pages;

    private $review;

    private $prise;


    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->connectToDB();
    }


}