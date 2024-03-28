<?php

namespace App\Controller;

use Hyperf\AsyncQueue\Annotation\AsyncQueueMessage;

class FooService
{
    #[AsyncQueueMessage]
    public function dump($data) : array 
    {
        $this->dump($data);
    }
}