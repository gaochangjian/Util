<?php
namespace  Util\mysql;

use mysql\DBInterface;

class PDO implements DBInterface
{
    private $_host;
    private $_port;
    private $_dbname;
    private $_pwd;
    private $_user;
    private $_drive = 'Mysql';
    private static $instance;
    private function __construct($host, $port, $dbname, $pwd, $user, $drive)
    {
        $this->_host = $host;
        $this->_port = $port;
        $this->_dbname = $dbname;
        $this->_pwd = $pwd;
        $this->_user = $user;
        $this->_drive = $drive;

        $dbh = new PDO($this->_drive.':'.$this->_host.'='.$this->_host.';'.'dbname='.$this->_dbname.'', $this->_user, $this->_pwd);

    }
    public static function getInstance($host, $port, $dbname, $pwd, $user, $drive)
    {
        if (!$instance instanceof self) {
            //从配置里读
            //$db_conf = include '.conf/mysq_conf.php';
            //粗略
            return $instance = new self($host, $port, $dbname, $pwd, $user, $drive);
        } else {
            return $instance;
        }
    }

    private function __clone()
    {}

    public function query()
    {      $dbh->query();
        // TODO: Implement query() method.
    }

    public function insert()
    {
        // TODO: Implement insert() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }
}