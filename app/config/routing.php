<?php


use Controller\Type;

return [
  [
    'pattern' => '/',
    'controller' => Type\Home::class,
    'method' => 'index'
  ],
  [
    'pattern' => '/invoice',
    'controller' => Type\Invoice::class,
    'method' => 'index'
  ]
];