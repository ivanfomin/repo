<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 10/15/16
 * Time: 12:39 AM
 */

namespace App;


class ConfigDb
{
    protected static $config;
    protected $path = __DIR__ . '/../conf.ini';
    protected $data = [];

    protected function __construct()
    {
        $this->fillData();
        $driver = $this->data['db']['driver'];
        $host = $this->data['db']['host'];
        $dbname = $this->data['db']['dbname'];
        $dsn = $driver . ':host=' . $host . ';dbname=' . $dbname;

        try {
            $this->dbh = new \PDO($dsn, 'root', '321', [
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            ]);
            $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->dbh->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        } catch (\PDOException $exception) {
            $dbException = new DbException();
            $dbException->setErrorMess($exception->getMessage());
            $dbException->setErrorSql($dsn);
            throw $dbException;
        }

    }


    public static function getInstance()
    {
        if (static::$config === null) {
            static::$config = new static();
        }
        return static::$config;
    }

    protected function fillData()
    {
        $conf = parse_ini_file($this->path);


        foreach ($conf as $item => $value) {

            $this->data['db'][$item] = $value;
        }


    }


}