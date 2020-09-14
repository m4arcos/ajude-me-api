<?php

namespace App\Services;

use App\Services\BaseService;
use App\Repositories\UserRepository;
use Exception;

class UserService extends BaseService {

    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    public function create($params)
    {
        if (!empty($params['password'])) {
            $params['password'] = md5($params['password']);
        }

        return parent::create($params);
    }

    public function edit($id, $data)
    {
        if (!empty($data['password'])) {
            $data['password'] = md5($data['password']);
        }

        return parent::edit($id, $data);
    }

    public function auth($mail, $pass) {
        $user = $this->repository->findByMail($mail);

        if (empty($user)) {
            throw new Exception('Não foi possível autenticar', 400);
        }

        if ($user->password != md5($pass)) {
            throw new Exception('Não foi possível autenticar', 400);
        }

        return $user;
    }

}