<?php

define('DIR_ROOT', realpath(__DIR__ . '/'));

//Composer autoload
require_once(DIR_ROOT . '/vendor/autoload.php');

// Load
require_once(DIR_ROOT . '/vendor/newcart/system/src/Newcart/System/load.php');

// Dispatch
$controller->dispatch($action, new Action('error/not_found'));

// Output
$response->output();