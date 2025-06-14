<?php

namespace App\Modules\User\Controllers\Admin;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $userRepo;
    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    public function index()
    {
        try {
            $data = $this->userRepo->index();
            return response()->json([
                'status' => 200,
                'data' => $data,
                'message' => 'Lấy data thành công',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 400,
                'message' => 'Lấy data lỗi',
            ], 400);
        }
    }
}
