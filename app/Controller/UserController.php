<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\UserService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

#[Controller]
class UserController extends AbstractController
{

    #[Inject]
    private UserService $userService;

    public function index()
    {
        return $this->response->raw('Hello Hyperf!');
    }

    #[RequestMapping(path: "create", methods: "post")]
    public function create()
    {
        return $this->userService->createUser();
    }
}
