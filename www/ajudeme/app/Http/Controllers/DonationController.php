<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\DonationService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request;

class DonationController extends BaseController
{

    protected DonationService $donationService;

    public function __construct(DonationService $donationService)
    {
        $this->service = $donationService;
    }
}
