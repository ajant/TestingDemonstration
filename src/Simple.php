<?php

namespace TestingDemonstration;

use UnexpectedValueException;

class Simple
{
    /**
     * @param mixed $input
     *
     * @return mixed
     * @throws UnexpectedValueException
     */
    public function work1($input)
    {
        if (is_int($input)) {
            return $input;
        }
        if (is_bool($input)) {
            return !$input;
        }

        throw new UnexpectedValueException('Invalid input', -1);
    }
}