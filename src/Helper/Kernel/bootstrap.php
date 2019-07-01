<?php
use App\Helper\Route\Factory;
use App\Helper\HTTP\Validation\Validation;
use App\Helper\HTTP\Validation\Type;
use App\Helper\Route\Validator;
$routeData = require_once BASE_PATH . 'app/config/routing.php' ;

// make Route validation.
$validation = new Validation();
$validation->setValidators([
  new Type\PatternValidator(),
  new Type\ControllerValidator(),
  new Type\ActionValidator(),
  new Type\MethodValidator()
]);

// make Routes
$routesFactory = new Factory();
$routes = $routesFactory->makeRoutes($routeData);
Validator::validate($routes, $validation);