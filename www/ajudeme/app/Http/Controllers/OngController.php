<?php

namespace App\Http\Controllers;

use App\Services\OngService;

class OngController extends BaseController
{

    protected OngService $ongService;

    public function __construct(OngService $ongService)
    {
        $this->service = $ongService;
    }
}
