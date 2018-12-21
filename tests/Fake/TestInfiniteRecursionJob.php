<?php

namespace Resque\Tests\Fake;

class TestInfiniteRecursionJob
{
    public function perform()
    {
        $this->perform();
    }
}