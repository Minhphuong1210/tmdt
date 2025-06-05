<?php

use App\Modules\Product\Controllers\Admins\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// require base_path('app/Modules/Product/routes/web.php');
// require base_path('app/Modules/Auth/routes/web.php');
