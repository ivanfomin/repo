<?php

require_once __DIR__ . '/autoload.php';

$config = \App\Config::getInstance();

echo $config->data['db']['host'];


