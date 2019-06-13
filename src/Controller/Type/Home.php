<?php

namespace Controller\Type;

use Controller\AbstractController;

class Home extends AbstractController
{

  public function index()
  {
    return "You have accessed home controller and fire index method.";
  }
}