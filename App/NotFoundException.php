<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 29.10.16
 * Time: 20:30
 */

namespace App;


class NotFoundException extends \Exception
{
    protected $sql;
    protected $message;

    /**
     * @param mixed $sql
     */
    public function setSql($sql)
    {
        $this->sql = $sql;
    }

    public function setMess($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * @return mixed
     */
    public function getMess()
    {
        return $this->message;
    }





}