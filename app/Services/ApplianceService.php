<?php

namespace App\Services;

use App\Repositories\Contracts\ApplianceRepositoryInterface;

class ApplianceService
{
    public function __construct(
        protected ApplianceRepositoryInterface $repository
    )
    {}

    public function all()
    {
        return $this->repository->all();
    }

    public function create($request)
    {
        return $this->repository->create($request);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($request, $id)
    {
        return $this->repository->find($id)->update($request->all());
    }

    public function delete($id)
    {
        return $this->repository->find($id)->delete();
    }
}