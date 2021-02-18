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
     * @return int
     */
    public function run($a, $b) {
        return $a + $b;
    }
}