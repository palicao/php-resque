<?php

namespace Resque\Tests\Fake;

use Resque\JobInterface;

class FailingJob implements JobInterface
{
    public function perform()
    {
        throw new FailingJobException('Message!');
    }
}
