<?php

namespace Resque\Tests\Fake;

class TestJobWithTearDown
{
    public static $called = false;
    public $args = false;

    public function perform()
    {

    }

    public function tearDown()
    {
        self::$called = true;
    }
}