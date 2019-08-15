<?php

namespace App\DB;

use PDO;

class Connection
{
  private static $conn;

  public function open():PDO
  {
    if (false === self::$conn instanceof \PDO) {
      $username = getenv('MYSQL_USERNAME');
      $password = getenv('MYSQL_PASSWORD');
      // for local db
      $host = getenv('MYSQL_HOST');
      // for docker
      // $host = 'db';

      $database = getenv('MYSQL_DATABASE');;
      $dsn = 'mysql:host=' . $host . ';dbname=' . $database;

      self::$conn = new \PDO($dsn, $username, $password);
    }
    return self::$conn;
  }
}
