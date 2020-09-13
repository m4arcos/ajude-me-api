<?php

namespace App\Http\Controllers;

use App\Services\NeedService;

class NeedController extends BaseController
{

    protected NeedService $needService;

    public function __construct(NeedService $needService)
    {
        $this->service = $needService;
    }
}
