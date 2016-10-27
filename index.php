<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__ . '/autoload.php';

//$parts = explode('/', $_SERVER['REQUEST_URI']);
//
//$ctrlRequest = !empty($parts[1]) ? $parts[1] : 'Index';
//
//$ctrlClassName = '\App\Controllers\\' . $ctrlRequest;
//
//$ctrl = new $ctrlClassName;
//
//$actRequest = !empty($parts[2]) ? $parts[2] : 'Default';
//
//$ctrl->action($actRequest);

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'Admin';

$act = !empty($_GET['act']) ? $_GET['act'] : 'Default';

$ctrlClassName = '\App\Controllers\\' . $ctrl;

$actmethod = 'action' . $act;

$ctrl = new $ctrlClassName;
$ctrl->$actmethod();




