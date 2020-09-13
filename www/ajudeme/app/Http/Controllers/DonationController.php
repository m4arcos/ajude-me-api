<?php

namespace App\Http\Controllers;

use App\Services\DonationService;

class DonationController extends BaseController
{

    protected DonationService $donationService;

    public function __construct(DonationService $donationService)
    {
        $this->service = $donationService;
    }
}
