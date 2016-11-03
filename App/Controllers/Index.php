<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 26.10.16
 * Time: 14:08
 */


namespace App\Controllers;

use App\Controller;
use App\DbException;
use App\Model\Article;
use App\MultiException;
use App\NotFoundException;
use App\View;


class Index extends Controller
{
    public function actionDefault()
    {
        $news = Article::findAll();
        $this->view->news = $news;
        $this->view->displayTwig('index.html');
    }

    public function actionOne()
    {
        $this->act();
        $this->view->displayOne(__DIR__ . '/../../templates/one.php');
    }

}