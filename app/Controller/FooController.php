<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class FooController
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        return $response->raw('Hello Hyperf!');
    }

    public function job(RequestInterface $request, ResponseInterface $response) : Returntype 
    {
        $data = ['a' => 'apple'];
        // queue_push(new FooJob($data));
        di()->get(FooService::class)->dump($data);
        return $response->json([]);    
    }
}
