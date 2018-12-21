<?php

namespace Resque\Tests\Fake;

use Resque\JobInterface;

class SomeJobClass implements JobInterface
{
    /**
     * @return bool
     */
    public function perform()
    {
        return true;
    }
}
