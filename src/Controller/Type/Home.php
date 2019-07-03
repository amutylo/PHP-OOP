<?php

namespace App\Controller\Type;

use App\Controller\AbstractController;
use App\Helper\HTTP\Request\Request;

class Home extends AbstractController
{
  public function index(Request $request)
  {
//    $request->getParameter('id')
    return [
      'view' => 'views/home.php',
      'params' => []
    ];
  }
}
