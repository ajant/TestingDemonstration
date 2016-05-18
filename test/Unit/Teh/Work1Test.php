<?php

namespace TestingDemonstration\Test\Unit\Teh;

class Work1Test extends TehTestCase
{
    public function testMethod()
    {
        // arrange
        $input = 1;
        $output = 2;
        $return = 3;
        $this->prophetHelper->do1($input)
            ->shouldBeCalled()
            ->willReturn($output);
        $this->prophetHelper->do1($output)
            ->shouldBeCalledTimes(2)
            ->willReturn($return);

        // act
        $result = $this->teh->work1($input);

        // assert
        $this->assertEquals($return, $result);
    }
}