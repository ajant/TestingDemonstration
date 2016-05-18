<?php

namespace TestingDemonstration\Test\Uni\Simple;

use PHPUnit_Framework_TestCase;
use TestingDemonstration\Simple;

class Work1Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();

//var_dump('set up test');
    }

    public function tearDown()
    {
        parent::setUp();

//var_dump('tear down test');
    }

    public function testBool()
    {
//var_dump('test bool');
        // arrange
        $input = true;
        $expected = false;
        $simple = new Simple();

        // act
        $result = $simple->work1($input);

        // assert
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider getData
     */
    public function testMethod($input, $expected)
    {
//var_dump('test method');
        // arrange
        $simple = new Simple();

        // act
        $result = $simple->work1($input);

        // assert
        $this->assertEquals($expected, $result);
    }

    public function getData()
    {
//var_dump('test method data');
        return [
            #0 input type: bool
            [
                'input' => true,
                'expected' => false
            ],
            #1 input type: integer
            [
                11,
                11
            ],
        ];
    }
}