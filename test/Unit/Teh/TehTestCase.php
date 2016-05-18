<?php

namespace TestingDemonstration\Test\Unit\Teh;

use PHPUnit_Framework_TestCase;
use TestingDemonstration\Teh;

class TehTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @var Teh $teh
     */
    protected $teh;

    protected $prophetHelper;

    public function setUp()
    {
        parent::setUp();

        $this->prophetHelper = $this->prophesize('TestingDemonstration\Helper');
        $this->teh = new Teh($this->prophetHelper->reveal());
    }
}