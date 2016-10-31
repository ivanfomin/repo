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

    public function actionError($err)
    {
        $this->view->error = $err;
        $this->view->displayOne(__DIR__ . '/../templates/error.php');
    }

    public function actionError404($err)
    {
        $this->view->error = $err;
        $this->view->displayOne(__DIR__ . '/../templates/error404.php');
    }

    public function action($action)
    {
        $actMethodName = 'action' . $action;

        if ($this->access()) {
            $this->$actMethodName();
        } else {
            echo "Доступ закрыт";
        }

    }

    protected function access()
    {
        return mt_rand(0, 1);
    }
}