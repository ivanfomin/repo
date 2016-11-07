<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 27.10.16
 * Time: 13:35
 */

namespace App\Controllers;


use App\Controller;
use App\DbException;
use App\Model\Article;
use App\MultiException;
use App\NotFoundException;
use App\View;

class Admin extends Controller
{
    public function actionDefault()
    {
        $this->view->news = Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/admin.php');
    }

    public function actionEdit()
    {
        $this->act();
        $this->view->displayOne(__DIR__ . '/../../templates/editArt.php');
    }

}