<?php

namespace App\Repositories;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Model;

class BaseRepository
{

    protected $model;

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findAll()
    {
        return $this->model->get();
    }

    public function create($data) {
        return $this->model->create($data);
    }
}
