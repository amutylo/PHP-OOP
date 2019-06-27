<?php

namespace App\Helper\HTTP\Request;

class Request
{

  /**
   * @var string 
   */
  private $path = '';

  /**
   * @var string
   */
  private $method = '';


  public function __construct(string $queryString = '', $method = '')
  {
    if (!empty($queryString)) {
      $this->setPath($queryString);
    }

    if (!empty($method)) {
      $this->setMethod($method);
    }
  }

  /**
   * @return string
   */
  public function getPath(): string {
    return $this->path;
  }

  /**
   * @param string $queryString
   *
   * @return Request
   */
  public function setPath(string $queryString): Request
  {
    $path = parse_url($queryString, PHP_URL_PATH);
    if (false === empty($path)) {
      $this->path = $path;
    }

    return $this;
  }

  /**
   * @return string
   */
  public function getMethod(): string {
    return $this->method;
  }

  /**
   * @param string $method
   *
   * @return Request
   */
  public function setMethod(string $method): Request {
    $this->method = strtoupper($method);
    return $this;
  }


}
