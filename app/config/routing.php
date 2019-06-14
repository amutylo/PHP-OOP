<?php


use Controller\Type;

return [
  [
    'pattern' => '/',
    'controller' => Type\Home::class,
    'method' => 'list'
  ],
  [
    'pattern' => '/list',
    'controller' => Type\Home::class,
    'method' => 'list'
  ]
];