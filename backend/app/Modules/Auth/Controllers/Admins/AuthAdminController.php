<?php

namespace App\Modules\Auth\Controllers\Admins;

use App\Http\Controllers\CRUDController;
use App\Modules\Auth\Models\Admin;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthAdminController
// extends CRUDController
{
    protected $module = [
        'code' => 'products',
        'lable' => 'Danh sách sản phẩm',
        'table_name' => 'products',
        'list' => [
            ['name' => 'name', 'type' => 'number', 'class' => 'col-3', 'label' => 'Tên'],
            ['name' => 'image', 'type' => 'file', 'class' => 'col-3', 'label' => 'Ảnh'],
            ['name' => 'price', 'type' => 'file', 'class' => 'col-3', 'label' => 'Giá'],
            ['name' => 'description', 'type']
        ]
    ];


    public function getIndex()
    {
        $data = [];
        // $data['module'] = $this->module;
        // $data['module']['listdata'] = $this->layDuLieuDB($data['module']);
        // dd($data);
        return view('admin.product.list')->with('data', $data);
    }

    public function add(Request $request)
    {

        if (!$_POST) {
            return view('Admin.product.add');
        }
    }


    public function login(Request $request)
    {
        $filler = filter_var($request->text, FILTER_VALIDATE_EMAIL) ? 'gmail' : 'tel';
        if ($filler == 'gmail') {
            $data = [
                'gmail' => $request->text,
                'password' => $request->password,
            ];
            $admin = Admin::where('gmail', $request->text)->first();
        } else {
            $data = [
                'tel' => $request->text,
                'password' => $request->password,
            ];
            $admin = Admin::where('tel', $request->text)->first();
        }
        if (Auth::guard('admins')->attempt($data)) {
            // plainTextToken là chuỗi token thô (raw token) được tạo ra bởi Laravel Sanctum sau khi gọi createToken()
            $token = $admin->createToken('token')->plainTextToken;
            $data = [
                'token' => $token,
                'admin' => $admin
            ];
            return response()->json([
                'status' => 200,
                'data' => $data,
                'message' => 'Đăng nhập thành công',
            ], 200);
        }
        return response()->json([
            'status' => 400,
            'message' => 'Đăng nhập không thành công',
        ], 400);
    }
    public function test()
    {
        return view('test');
    }

    public function register(Request $request)
    {
        $validate = $request->validate(
            [
                'gmail' => 'unique:admins,gmail',
                'tel' => 'unique:admins,tel',
            ],
            [
                'gmail.unique' => 'Gmail đã tồn tại.',
                'gmail.tel' => 'Số điện thoại đã tồn tại.',
            ]
        );
        try {
            $data = $request->only(['name', 'address', 'gmail', 'tel']);
            $data['password'] = Hash::make($request->password);
            Admin::create($data);
            return response()->json([
                'status' => 200,
                'message' => 'Đăng ký thành công',
            ], 200);
        } catch (Exception $e) {
            // xử lý lỗi
            return response()->json([
                'status' => 400,
                'data' => $e,
                'message' => 'Đăng ký thất bại',
            ], 400);
        }
    }
}
