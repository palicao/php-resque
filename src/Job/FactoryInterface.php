<?php

namespace Resque\Job;

use Resque\JobInterface;

interface FactoryInterface
{
	/**
	 * @param $className
	 * @param array $args
	 * @param $queue
	 * @return JobInterface
	 */
	public function create($className, $args, $queue);
}
