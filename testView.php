<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once __DIR__ . '/autoload.php';

$news = \App\Model\Article::findAll();

$view = new \App\View();

$view->news = $news;

$html = $view->render(__DIR__ . '/templates/index.php');
$html = str_replace('без автора', 'автора нет', $html);
echo $html;






