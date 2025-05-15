<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CRUDController{
    public function layDuLieuDB($data){
        $table_name = $data['table_name'];
        $data['listdata'] = DB::select("SELECT * FROM `$table_name`");
       return $data;
    }
}

