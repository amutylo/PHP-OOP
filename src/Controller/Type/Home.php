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
      return View::render('views/home/index.php', [
      ]);
    }
}
