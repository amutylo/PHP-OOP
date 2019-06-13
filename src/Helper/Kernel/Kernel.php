<?php

use \Helper\Route\Route;
use \Helper\Route\Router;

$basePath = $_SERVER['DOCUMENT_ROOT'] . '/../';
require_once $basePath . 'src/Helper/Autoloader/Autoloader.php';

$routes = [
  [
    'pattern' => '^/$',
    'controller' => 'home',
    'method' => 'index'
  ],
  [
    'pattern' => '^/customer$',
    'controller' => 'customer',
    'method' => 'index'
  ],
  [
    'pattern' => '^/customer{id}$',
    'controller' => 'customer',
    'method' => 'record'
  ],
  [
    'pattern' => '^/invoice/add$',
    'controller' => 'invoice',
    'method' => 'add'
  ]
];

$routesBuild = [];
foreach ($routes as $routeData) {
  $route = new Route($routeData);
  $routesBuild[] = $route;
}

$currentPattern = $_SERVER['QUERY_STRING'];
$router = new Router();
$router->register($route);
$knownRoute = $router->process($currentPattern);

$controller = $knownRoute->getController();
$template = $controller->{$knownRoute->getMethod()};