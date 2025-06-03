<?php
namespace App\Modules\Product\Controllers\Admins;

use App\Http\Controllers\CRUDController;
use DB;
use Illuminate\Http\Request;

class ProductController 
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
            ['name'=>'description','type']
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

}

