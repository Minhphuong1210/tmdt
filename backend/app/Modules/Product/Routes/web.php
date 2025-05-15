<?php

use App\Modules\Product\Controllers\Admins\ProductController;

// Route::get('/test',[ProductController::class,'getIndex']);

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'products'], function () {
        Route::get('', '\App\Modules\Product\Controllers\Admins\ProductController@getIndex')->name('Product');
        Route::get('publish', '\App\Modules\Product\Controllers\Admins\ProductController@getPublish')->name('Product.publish');
        Route::match(array('GET', 'POST'), 'add', '\App\Modules\Product\Controllers\Admins\ProductController@add')->name('add');
        Route::get('delete/{id}', '\App\Modules\Product\Controllers\Admins\ProductController@delete');
        Route::post('multi-delete', '\App\Modules\Product\Controllers\Admins\ProductController@multiDelete');
        Route::get('search-for-select2', '\App\Modules\Product\Controllers\Admins\ProductController@searchForSelect2');
        Route::get('edit/{id}', '\App\Modules\Product\Controllers\Admins\ProductController@update');
        Route::post('edit/{id}', '\App\Modules\Product\Controllers\Admins\ProductController@update');
    });
});
