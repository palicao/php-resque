<?php

namespace Resque\Tests\Fake;

class TestJobWithSetUp
{
    public static $called = false;
    public $args = false;

    public function setUp()
    {
        self::$called = true;
    }

    public function perform()
    {

    }
}