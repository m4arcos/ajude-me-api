<?php

namespace App\Services;

use App\Services\BaseService;
use App\Repositories\DonationRepository;

class DonationService extends BaseService {

    protected DonationRepository $donationRepository;

    public function __construct(DonationRepository $donationRepository)
    {
        $this->repository = $donationRepository;
    }

}