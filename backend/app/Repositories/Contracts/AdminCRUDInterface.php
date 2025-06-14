<?php

namespace App\Repositories\Contracts;

interface AdminCRUDInterface
{
    public function index();
    public function create(array $data);
    public function find(int $id);
    public function update(int $id, array $data);
    public function delete(int $id);
}
