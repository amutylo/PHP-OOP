<?php


use Controller\Type;

return [
  [
    'pattern' => '/',
    'controller' => Type\Home::class,
    'method' => 'index'
  ],
  [
    'pattern' => '/list',
    'controller' => Type\Home::class,
    'method' => 'list'
  ]
];