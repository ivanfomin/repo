<?php


require_once __DIR__ . '/../autoload.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $article = \App\Model\Article::findById($id);
    $article->delete();
}
header('Location: /index.php');