<?php
use App\Helper\HTTP\Route\Factory;
use App\Helper\HTTP\Validation\Validation;
use App\Helper\HTTP\Validation\Type;
use App\Helper\HTTP\Route\Validator;

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
$isValid = Validator::validate($routes, $validation);

return $routes;


