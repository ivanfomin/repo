<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 26.10.16
 * Time: 14:22
 */

namespace App;


abstract class Controller
{
    protected $view;


    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $actMethodName = 'action' . $action;

        if($this->access()) {
            $this->$actMethodName();
        } else {
            echo "Доступ закрыт";
        }

    }

    protected function access() {
        //Надо бы какую-нибудь аутентификацию здесь запилить
        return true;
    }
}