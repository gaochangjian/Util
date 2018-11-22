<?php
/**
 * Created by PhpStorm.
 * User: xqy
 * Date: 2018/11/22
 * Time: 13:51
 */

namespace Util\mysql;


class Db
{
    private $dbh;
    public function __construct()
    {
        $this->dbh = PDO::getInstance('127.0.0.1', '3306', 'test', 123456, 'root');
    }



}