<?php

namespace App\Repositories;
 
use App\Models\Donation;
use App\Repositories\BaseRepository;

class DonationRepository extends BaseRepository {

    public function __construct(Donation $donation)
    {
        $this->model = $donation;
    }

}

