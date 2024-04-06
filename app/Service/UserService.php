<?php

namespace App\Service;

use App\Job\CreateUser;
use Hyperf\AsyncQueue\Driver\DriverFactory;
use Hyperf\Context\ApplicationContext;

class UserService extends BaseService
{
    public function createUser()
    {
        $factory = ApplicationContext::getContainer()->get(DriverFactory::class);
        $driver = $factory->get('userQueen');
        $driver->push(new CreateUser(['user_id' => 110]), 10);

        return ['id' => 1, 'name' => 'summer'];
    }
}