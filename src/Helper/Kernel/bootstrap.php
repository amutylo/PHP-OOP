<?php
use App\Helper\Route\Factory;
use \App\Helper\Route\Validation\Validation;
use \App\Helper\Route\Validation\Type;
use \App\Helper\Route\Validator;
$routeData = require_once BASE_PATH . 'app/config/routing.php' ;

$validation = new Validation();
$validation->setValidators([
  new Type\PatternValidator(),
  new Type\ControllerValidator(),
  new Type\ActionValidator()
]);

$routesFactory = new Factory();
$routes = $routesFactory->makeRoutes($routeData);
Validator::validate($routes, $validation);