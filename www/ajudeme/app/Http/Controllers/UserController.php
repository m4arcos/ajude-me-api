<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends BaseController
{

    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }
}
