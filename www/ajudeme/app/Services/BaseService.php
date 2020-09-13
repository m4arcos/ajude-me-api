<?php

namespace App\Services;

class BaseService
{

    protected $repository;

    public function getAll()
    {
        return $this->repository->findAll();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function create($params) {
        return $this->repository->create($params);
    }

    public function edit($id, $data) {
        $obj = $this->repository->find($id);

        if (empty($obj)) {
            throw new \Exception('Not found', 404);
        }

        foreach ($data as $field => $value) {
            $obj->{$field} = $value;
        }

        if ($obj->save()) {
            return $obj;
        }

        return null;
    }

    public function delete($id) {
        $obj = $this->repository->find($id);

        if (empty($obj)) {
            throw new \Exception('Not found', 404);
        }

        return $obj->delete();
    }
}
