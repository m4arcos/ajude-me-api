<?php

namespace App\Services;

use App\Services\BaseService;
use App\Repositories\OngRepository;

class OngService extends BaseService {

    protected OngRepository $ongRepository;

    public function __construct(OngRepository $ongRepository)
    {
        $this->repository = $ongRepository;
    }

}