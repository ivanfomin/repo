<?php

require_once __DIR__ . '/../autoload.php';

if (isset($_POST['title']) && isset($_POST['content'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $article = new \App\Model\Article();

    $article->title = $title;
    $article->content = $content;

    $article->save();
}
header('Location: /');
