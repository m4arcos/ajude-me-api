<?php

namespace App\Repositories;
 
use App\Models\Need;
use App\Repositories\BaseRepository;

class NeedRepository extends BaseRepository {

    public function __construct(Need $need)
    {
        $this->model = $need;
    }

}

