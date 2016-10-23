<?php

require_once __DIR__ . '/../autoload.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $article = \App\Model\Article::findById($id);
    include __DIR__ . '/../templates/show.php';
}