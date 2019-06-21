<?php

use \Helper\Route\Processor;

$basePath = $_SERVER['DOCUMENT_ROOT'] . '/../';
require_once $basePath . 'src/Helper/Autoloader/Autoloader.php';

$routes = require_once $basePath . '/app/config/routing.php';

$currentUri = $_SERVER['REQUEST_URI'];

$processor = new Processor();
$router = $processor->make($routes);
return $processor->process($router, $currentUri);
