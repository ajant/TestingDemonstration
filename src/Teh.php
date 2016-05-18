<?php

namespace TestingDemonstration;

use UnexpectedValueException;

class Teh
{
    /**
     * @var Helper $helper
     */
    private $helper;

    /**
     * @param Helper $helper
     */
    public function __construct(Helper $helper)
    {
        $this->helper = $helper;
    }

    /**
     * @param int $input
     *
     * @return int
     */
    public function work1($input)
    {
        $result = $this->helper->do1($input);
        $this->helper->do1($result);

        return $this->helper->do1($result);
    }

    /**
     * @param Helper $anotherHelper
     *
     * @return void
     */
    public function work2(Helper $anotherHelper)
    {
        $this->helper->do2();
        try {
            $this->helper->do2();
        } catch (UnexpectedValueException $e) {
            $anotherHelper->do2([1]);
        }
    }
}