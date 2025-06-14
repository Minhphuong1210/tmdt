<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Modules\Auth\Models\Admin;


class AdminUserRepository implements UserRepositoryInterface
{
    protected $model;
    public function __construct(Admin $admin)
    {
        $this->model = $admin;
    }
    public function index()
    {
        return $this->model->all();
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }
    public function update(int $id, array $data)
    {
        $user = $this->model->findOrFail($id);
        $user->update($data);
        return $user;
    }
    public function delete(int $id)
    {
        return $this->model->destroy($id);
    }
}
