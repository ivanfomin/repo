<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__ . '/autoload.php';


$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'Index';

$act = !empty($_GET['act']) ? $_GET['act'] : 'Default';

$ctrlClassName = '\App\Controllers\\' . $ctrl;

$ctrl = new $ctrlClassName;

try {
    $ctrl->action($act);
} catch (\App\DbException $dbException) {
    $actmethod = 'action' . 'Error';
    $ctrl->$actmethod($dbException->getError());
} catch (\App\NotFoundException $notFoundException) {
    $actmethod = 'action' . 'Error404';
    $ctrl->$actmethod($notFoundException->getMess());
}



