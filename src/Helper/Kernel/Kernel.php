<?php

use \Helper\Route\Processor;

$basePath = $_SERVER['DOCUMENT_ROOT'] . '/../';
require_once $basePath . 'src/Helper/Autoloader/Autoloader.php';

$routes = require_once $basePath . '/app/config/routing.php';


$processor = new Processor();
$router = $processor->make($routes);
return $processor->run($router, $_SERVER['REQUEST_URI']);
