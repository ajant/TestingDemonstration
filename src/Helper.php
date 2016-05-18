<?php

namespace TestingDemonstration;

class Helper
{
    /**
     * @param mixed $input
     *
     * @return mixed
     */
    public function do1($input)
    {
        return $input;
    }

    /**
     * @param array $argument
     *
     * @return bool
     */
    public function do2($argument = [])
    {
        return true;
    }
}