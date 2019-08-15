<?php
namespace App\Controller\Type;

use App\Controller\AbstractController;
use App\Helper\HTTP\Request\Request;
use App\Helper\HTTP\Response\View;
use App\DB\Connection;

class Home extends AbstractController
{
    public function index(Request $request)
    {
      $connection = new Connection();
      $conn = $connection->open();
      $query = $conn->query('SELECT * FROM `status`');
      $rows = $query->fetchAll(\PDO::FETCH_ASSOC);
      return View::render('views/home/index.php', [
        'data' => $rows
      ]);
    }
}
