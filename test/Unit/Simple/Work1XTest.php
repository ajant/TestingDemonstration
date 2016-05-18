<?php

namespace TestingDemonstration\Test\Unit;

use PHPUnit_Framework_TestCase;
use TestingDemonstration\Simple;

class Work1XTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getData
     * @test
     */
    public function invalidInput($input)
    {
//var_dump('test method x');
        // assert
        $this->setExpectedException(
            '\UnexpectedValueException',
            'Invalid input',
            -1
        );

        // arrange
        $simple = new Simple();

        // act
        $simple->work1($input);
    }

    public function getData()
    {
//var_dump('test method x data');
        return [
            #0 invalid input type: array
            [
                'input' => [],
            ],
            #1 invalid input type: string
            [
                'input' => 'foo'
            ],
        ];
    }
}