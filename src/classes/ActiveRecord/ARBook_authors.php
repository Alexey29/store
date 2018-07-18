<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 18.07.18
 * Time: 17:06
 */

namespace src\classes\ActiveRecord;


class ARBook_authors extends ActiveRecord
{
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->connectToDB();
    }

}