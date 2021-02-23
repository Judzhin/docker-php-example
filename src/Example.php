<?php

namespace Application;

/**
 * Class Example
 * @package Application
 */
class Example
{
    /** @var null|string */
    private $name = null;

    /**
     * Example constructor.
     * @param string $name
     */
    public function __construct($name = 'default')
    {
        $this->name = $name;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    private function sumOfFactorials(int $a, int $b):int
    {
        return $this->sum(
            $this->factorial($a), $this->factorial($b)
        );
    }

    /**
     * @param int $num
     * @return int
     */
    private function factorial(int $num): int
    {
        /** @var int $result */
        $result = 1;
        for ($i = 1; $i <= $num; $i++) {
            $result = $result * $i;
        }
        return $result;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    private function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * @param int $a
     * @param int $b
     * @return mixed
     */
    public function run(int $a = 5, int $b = 10)
    {
        return $this->sumOfFactorials($a, $b);
    }
}