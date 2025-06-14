<?php

use App\Modules\Auth\Controllers\Admins\AuthAdminController;
use App\Modules\Product\Controllers\Admins\ProductController;




Route::post('/auth/login', [AuthAdminController::class, 'login'])->name('auth.login');
Route::post('/auth/register', [AuthAdminController::class, 'register'])->name('auth.register');

Route::get('/test', [AuthAdminController::class, 'test']);
