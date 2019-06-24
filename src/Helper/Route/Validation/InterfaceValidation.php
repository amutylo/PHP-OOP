<?php

namespace  App\Helper\Route;

interface InterfaceValidation
{

  /**
   * @param mixed $value
   *
   * @return bool
   */
  public function isValid($value):bool; 
}