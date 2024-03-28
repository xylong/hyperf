<?php

use Psr\Container\ContainerInterface;
use Hyperf\Context\ApplicationContext;
use Hyperf\AsyncQueue\JobInterface;
use Hyperf\AsyncQueue\Driver\DriverFactory;

if (!function_exists('di')) {
    /**
     * hyperf container
     * @return ContainerInterface
     */
    function di($id = null): ContainerInterface
    {
        $container = ApplicationContext::getContainer();
        if ($id) {
            return $container->get($id);
        }

        return $container;
    }
}

if (!function_exists('queue_push')) {
    /**
     * push a job to async queue
     */
    function queue_push(JobInterface $job, int $delay = 0, string $key = 'default') : bool {
        $driver = di()->get(DriverFactory::class)->get($key);
        return $driver->push($job, $delay);
    }
}