<?php

namespace App\Repositories\Contracts;

interface ApplianceRepositoryInterface
{
    public function all();
    public function create($request);
    public function find($id);
    public function update($request, $id);
    public function delete($id);
}