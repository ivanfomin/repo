<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 10/15/16
 * Time: 12:39 AM
 */

namespace App;


class Config
{
    protected static $config;
    protected $path = __DIR__ . '/../conf.ini';
    protected $data = [];
    protected $dbh;


    public function __construct()
    {
        $this->fillData();
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    protected function fillData()
    {
        $conf = parse_ini_file($this->path);


        foreach ($conf as $item => $value) {

            $this->data['db'][$item] = $value;
        }


    }


}