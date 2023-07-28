<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();    
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($request)
    {
        return $this->model->create($request);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($request, $id)
    {
        return $this->model->find($id)->update($request->all());
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    protected function resolveModel()
    {
        return app($this->model);    
    }
}