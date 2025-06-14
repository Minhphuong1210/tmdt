<?php


// use Illuminate\Routing\Route;
use App\Modules\User\Controllers\Admin\UserController;

Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
