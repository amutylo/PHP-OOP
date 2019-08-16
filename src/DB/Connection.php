<?php

namespace App\DB;

use PDO;

class Connection
{
  private static $conn;

  public function open():PDO
  {
    if (false === self::$conn instanceof \PDO) {
//      $username = getenv('MYSQL_USERNAME', TRUE);
      $username = 'root';
//      $password = getenv('MYSQL_PASSWORD', TRUE);
      $password = 'root';
      // for local db
//      $host = getenv('MYSQL_HOST');
      $host = '127.0.0.1';
      // for docker
      // $host = 'db';

//      $database = getenv('MYSQL_DATABASE');;
      $database = 'invoice_app';
      $dsn = 'mysql:host=' . $host . ';dbname=' . $database;

      self::$conn = new \PDO($dsn, $username, $password);
    }
    return self::$conn;
  }
}
