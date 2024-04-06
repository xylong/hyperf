<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

#[Controller]
class FooController
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        return $response->raw('Hello Hyperf!');
    }

    #[RequestMapping(path: "foo", methods: "get,post")]
    public function job(RequestInterface $request, ResponseInterface $response)
    {
        $data = ['a' => 'apple'];
        // queue_push(new FooJob($data));
//        di()->get(FooService::class)->dump($data);
//        return $response->json([]);
    }
}
