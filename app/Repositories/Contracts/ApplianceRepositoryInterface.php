<?php

namespace App\Repositories\Contracts;

interface ApplianceRepositoryInterface
{
    public function all();
    public function create($request);
    public function find(string $id);
    public function update($request, string $id);
    public function delete(string $id);
}