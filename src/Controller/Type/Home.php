<?php
namespace App\Controller\Type;

use App\Controller\AbstractController;
use App\Entity\Type\Status;
use App\Helper\HTTP\Request\Request;
use App\Helper\HTTP\Response\View;
use App\DB\Connection;
use App\Manager\StatusManager;

class Home extends AbstractController
{
    public function index(Request $request)
    {
      $status = new Status();
      $connection = new Connection();
      $conn = $connection->open();

      $manager = new StatusManager($connection);
      $manager->save();

      return View::render('views/home/index.php', [
      ]);
    }
}
