<?php
namespace App\DB;
use PDO;

class Connection
{
  private static $conn;

  private $env = 'test';

  public function __construct(string $env = 'test')
  {
    $this->env = $env;
  }

  public function getCreds():array
  {
    return [
      'username' => getenv('MYSQL_USERNAME', TRUE) ? getenv('MYSQL_USERNAME', TRUE) : 'root',
      'password' => getenv('MYSQL_PASSWORD', TRUE) ? getenv('MYSQL_PASSWORD', TRUE) : 'root',
      'host' => getenv('MYSQL_HOST', TRUE) ? getenv('MYSQL_HOST', TRUE) : '127.0.0.1',
      'database' => getenv('MYSQL_DATABASE', TRUE) ? getenv('MYSQL_DATABASE', TRUE) : 'invoice_app'
    ];
  }
  public function open():PDO
  {
    $creds = $this->getCreds();
    if (false === self::$conn instanceof \PDO) {
      $username = $creds['username'];
      $password = $creds['password'];
      $host = $creds['host'];
      $database = $creds['database'];
      
      $dsn = 'mysql:host=' . $host . ';dbname=' . $database;

      self::$conn = new \PDO($dsn, $username, $password);
    }
    return self::$conn;
  }
}
