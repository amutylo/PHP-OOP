<?php
//use Repository\Type\Invoice;

$viewData = require_once '../src/Helper/Kernel/Kernel.php';

//$repo = new Invoice();
//$repo->findOne(4);

// Do something that gets the view from the controller

var_dump($viewData);
require_once $viewData['view'];

