<?php

class Autoloader
{
  public static function loader (string $className)
  {
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/../';
    $extension = '.php';

    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $fullPath = $basePath . $classPath . $extension;

    include_once $fullPath;
  }
}

spl_autoload_register('Autoloader::load');
