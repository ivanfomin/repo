<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 27.10.16
 * Time: 13:35
 */

namespace App\Controllers;


use App\Controller;
use App\Model\Article;
use App\View;

class Admin extends Controller
{
    public function actionDefault()
    {
        $news = Article::findAll();

        $this->view->news = $news;
        $this->view->display(__DIR__ . '/../../templates/admin.php');
    }

    public function actionEdit()
    {
        $article = Article::findById($_GET['id']);
        if($article == false) {
            echo "Нет такой новотсти!";
        }
        $this->view->article = $article;
        $this->view->displayOne(__DIR__ . '/../../templates/editArt.php');

    }

    public function actionSave()
    {
        include __DIR__ . '/../../templates/add.php';
    }



}