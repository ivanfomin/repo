<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once __DIR__ . '/autoload.php';

$news = \App\Model\Article::findAll();

$view = new View();

$view->news = $news;

//var_dump($view->news);

$view->display(__DIR__ . '/templates/index.php');




