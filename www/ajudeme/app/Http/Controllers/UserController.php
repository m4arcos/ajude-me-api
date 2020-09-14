<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;

class UserController extends BaseController
{

    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function auth(Request $request)
    {
        $mail = $request->get('mail');
        $password = $request->get('password');

        try {
            if (empty($mail) || empty($password)) {
                throw new \Exception("Usuário ou senha inválidos", 400);
            }

            $result = $this->service->auth($mail, $password);

            return response()->json($result->toArray());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }
}
