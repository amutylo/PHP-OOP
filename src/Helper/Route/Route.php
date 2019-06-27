<?php

namespace App\Helper\Route;


class Route
{

  /**
   * @var string
   */
  private $pattern = '';

  /**
   * @var string
   */
  private $controller = '';

  /**
   * @var array 
   */
  private $methods = [];
  /**
   * @var string 
   */
  private $action = '';
  

  /**
   * @return string
   */
  public function getPattern(): string {
    return $this->pattern;
  }

  /**
   * @param string $pattern
   *
   * @return \Helper\Route\Route
   */
  public function setPattern(string $pattern): Route {
    $this->pattern = $pattern;
    return $this;
  }

  /**
   * @return string
   */
  public function getController() {
    return $this->controller;
  }

  /**
   * @param string $controller
   *
   * @return \Helper\Route\Route
   */
  public function setController(string $controller): Route {
    $this->controller = $controller;
    return $this;
  }

  /**
   * @return string
   */
  public function getMethods(): array {
    return $this->methods;
  }

  /**
   * @param string $method
   *
   * @return Route
   */
  public function setMethods(array $method): Route {
    $this->methods = array_map('strtoupper', $method);
    return $this;
  }

  /**
   * @return string
   */
  public function getAction(): string {
    return $this->action;
  }

  /**
   * @param string $action
   */
  public function setAction(string $action):Route {
    $this->action = $action;
    return $this;
  }
  
}
