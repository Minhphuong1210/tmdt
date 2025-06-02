<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\AdminRepostoryInterface;

class AdminRepostory implements AdminRepostoryInterface
{
    public function login(string $email, string $password)
    {
        return;
    }
    public function register(string $email, string $password, string $name)
    {
        return;
    }
}
