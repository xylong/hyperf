<?php

declare(strict_types=1);

namespace App\Job;

use Hyperf\AsyncQueue\Job;

class FooJob extends Job
{
    protected $param;

    protected int $maxAttempts = 2;

    public function __construct($param)
    {
        $this->param = $param;
    }

    public function handle()
    {
        var_dump($this->param);
    }
}
