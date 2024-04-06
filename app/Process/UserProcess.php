<?php

declare(strict_types=1);

namespace App\Process;

use Hyperf\Process\AbstractProcess;
use Hyperf\Process\Annotation\Process;

#[Process(name: 'UserProcess')]
class UserProcess extends AbstractProcess
{
    public function handle(): void
    {
        var_dump('aaaaa');
    }
}
