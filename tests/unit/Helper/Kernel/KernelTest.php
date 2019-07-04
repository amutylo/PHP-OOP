<?php

namespace Helper\Route;

use App\Controller\Type;
use App\Helper\HTTP\Route\Factory;
use App\Helper\HTTP\Route\Route;
use App\Helper\Kernel\Kernel;

class KernelTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @group kernel
     * @group kernel-default
     */
    public function testDefault()
    {
//        $booted = Kernel::boot([]);
//        $this->assert($booted);
    }
}