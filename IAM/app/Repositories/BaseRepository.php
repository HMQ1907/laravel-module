<?php

namespace Modules\IAM\app\Repositories;

abstract class BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes = [])
    {
        $result = $this->find($id);

        if ($result) {
            $result->update($attributes);

            return $result;
        }

        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);

        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }

    public function upsert(array $data, array $key, array $value)
    {
        return $this->model->upsert($data, $key, $value);
    }

    public function insert(array $data)
    {
        return $this->model->insert($data);
    }

    public function getTable()
    {
        return $this->model->getTable();
    }

    public function paginate(int $per_page)
    {
        return $this->model->paginate($per_page);
    }
}
