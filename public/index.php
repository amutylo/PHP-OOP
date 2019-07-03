<?php
use App\Helper\Kernel\Kernel;
require_once '../app/config/config.php';
require_once BASE_PATH . 'vendor/autoload.php';
$routes = require_once KERNEL_PATH . 'bootstrap.php';

$response = Kernel::boot($routes);

