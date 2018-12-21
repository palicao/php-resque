<?php

namespace Resque\Tests\Fake;

use Resque\Job\FactoryInterface;
use Resque\JobInterface;

class SomeStubFactory implements FactoryInterface
{
    /**
     * @param $className
     * @param array $args
     * @param $queue
     * @return JobInterface
     */
    public function create($className, $args, $queue)
    {
        return new SomeJobClass();
    }
}