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
        try {
            $news = Article::findAll();
        } catch (\PDOException $exception) {
            $dbException = new DbException();
            $dbException->setErrorMess($exception->getMessage());
            throw $dbException;
        }

        $this->view->news = $news;
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    public function actionOne()
    {

        $article = Article::findById($_GET['id']);
        if ($article == false) {
            $nfException = new NotFoundException();
            $nfException->setMess("Нет такой записи!!!");
            throw $nfException;
        }
        $this->view->article = $article;
        $this->view->displayOne(__DIR__ . '/../../templates/one.php');
    }

}