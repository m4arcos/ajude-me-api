<?php

namespace App\Repositories;
 
use App\Models\Ong;
use App\Repositories\BaseRepository;

class OngRepository extends BaseRepository {

    public function __construct(Ong $ong)
    {
        $this->model = $ong;
    }

}

