<?php

namespace App\Services;

use App\Services\BaseService;
use App\Repositories\UserRepository;

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

}