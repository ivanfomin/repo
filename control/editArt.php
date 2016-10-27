<?php

require_once __DIR__ . '/../autoload.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $article = \App\Model\Article::findById($id);
    if($article === false) {
        echo "Нет такой новости!";
    }
    include __DIR__ . '/../templates/edit.php';
}