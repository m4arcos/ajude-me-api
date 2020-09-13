<?php

namespace App\Services;

use App\Services\BaseService;
use App\Repositories\NeedRepository;

class NeedService extends BaseService {

    protected NeedRepository $needRepository;

    public function __construct(NeedRepository $needRepository)
    {
        $this->repository = $needRepository;
    }

}