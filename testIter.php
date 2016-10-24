<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once __DIR__ . '/autoload.php';

$iter = new \App\Iter("One, Two ,Three, Four, Five");


while ($iter->valid()) {
    echo $iter->current();
    $iter->next();
}