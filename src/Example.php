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
     * @param $text
     */
    public function say($text)
    {
        $test = 0;
        echo $text;
    }
}