<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 24.10.16
 * Time: 1:38
 */

namespace App;


class Iter implements \Iterator
{
    protected $pos = 0;
    protected $arr = [];

    public function __construct($str)
    {
        $this->arr = explode(',', $str);

    }


    public function current()
    {
        return $this->arr[$this->pos];
    }


    public function next()
    {
        ++$this->pos;
    }


    public function key()
    {
        return $this->pos;
    }


    public function valid()
    {
        return isset($this->arr[$this->pos]);
    }


    public function rewind()
    {
        $this->pos = 0;
    }


}