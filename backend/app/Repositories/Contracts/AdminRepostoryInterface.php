<?php

namespace App\Repositories\Contracts;

interface AdminRepostoryInterface
{
    public function login(string $email, string $password);
    public function register(string $email, string $password, string $name);
}
