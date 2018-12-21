<?php

namespace Resque\Tests\Fake;

class TestJob
{
    public static $called = false;

    public function perform()
    {
        self::$called = true;
    }
}
