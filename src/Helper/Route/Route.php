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
  private $method = [];
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
  }

  /**
   * @return string
   */
  public function getMethod(): array {
    return $this->method;
  }

  /**
   * @param string $method
   *
   * @return \Helper\Route\Route
   */
  public function setMethod(array $method): Route {
    $this->method = $method;
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
  public function setAction(string $action): void {
    $this->action = $action;
  }
  
}
