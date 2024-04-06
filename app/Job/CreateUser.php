<?php

declare(strict_types=1);

namespace App\Job;

use Hyperf\AsyncQueue\Job;

class CreateUser extends Job
{
    protected array $param;

    public function __construct(array $param)
    {
        $this->param = $param;
    }

    public function handle()
    {
        var_dump('bbbb');
        var_dump($this->param);
    }
}
