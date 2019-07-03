<?php

namespace App\Controller\Type;

use App\Controller\AbstractController;

class Invoice extends AbstractController
{
  
  public function index()
  {
    return [
      'view' => 'views/invoice.php',
      'params' => []
    ];
  }

  public function edit()
  {
    return [
      'view' => 'views/invoice.php',
      'params' => []
    ];
  }

  public function dashboard()
  {
    return [
      'view' => 'views/invoice.php',
      'params' => []
    ];
  }
}
