<?php
define('DIR_ROOT', realpath(__DIR__));

//Composer autoload
require_once(DIR_ROOT . '/vendor/autoload.php');

// Load
require_once(DIR_ROOT . '/vendor/newcart/system/src/Newcart/System/load.php');

//check access admin panel
parse_str($_SERVER['QUERY_STRING'], $output);
$route = isset($output['_route_']) ? $output['_route_'] : '';

//Set environment
if (substr($route, 0, strlen($config->get('admin_path'))) == $config->get('admin_path')) {
    $config->set('environment', 'admin');
} else {
    $config->set('environment', 'catalog');
}

//Constants
require_once(DIR_ROOT . '/vendor/newcart/system/src/Newcart/System/constants.php');

//Bootstrap
require_once(DIR_APPLICATION . 'bootstrap.php');

// Dispatch
$controller->dispatch($action, new Action('error/not_found'));

// Output
$response->output();