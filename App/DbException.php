<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 29.10.16
 * Time: 18:05
 */

namespace App;


class DbException extends \Exception
{

    protected $errorMess;


    public function setErrorMess($mess)
    {
        $this->errorMess = $mess;
    }

    public function getError()
    {
        return 'Error ' . $this->errorMess . '!';
    }


}