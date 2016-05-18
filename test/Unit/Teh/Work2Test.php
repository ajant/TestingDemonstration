<?php

namespace TestingDemonstration\Test\Unit\Teh;

use Prophecy\Argument;
use UnexpectedValueException;

class Work2Test extends TehTestCase
{
    public function testExceptionNotThrown()
    {
        // arrange
        $prophetAnotherHelper = $this->prophesize('TestingDemonstration\Helper');
        $expected = true;
        $this->prophetHelper->do2()
            ->shouldBeCalledTimes(2)
            ->willReturn($expected);

        // act
        $this->teh->work2($prophetAnotherHelper->reveal());

        // assert in prophecies
    }

    public function testExceptionThrown()
    {
        // arrange
        $exception = '\InvalidArgumentException';
        $message = 'Invalid input';
        $this->setExpectedException(
            $exception,
            $message
        );

        $prophetAnotherHelper = $this->prophesize('TestingDemonstration\Helper');
        $prophetAnotherHelper->do2(Argument::type('array'))
            ->shouldBeCalled()
            ->willThrow(new $exception($message));

        $counter = 0;
        $this->prophetHelper->do2()
            ->shouldBeCalledTimes(2)
            ->will(function() use (&$counter) {
                if ($counter++ != 0) {
                    throw new UnexpectedValueException();
                }
            });

        // act
        $this->teh->work2($prophetAnotherHelper->reveal());
    }
}