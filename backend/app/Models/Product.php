<?php

namespace App\Models;

class Product
{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'image', 'image_array', 'description', 'view', 'active', 'category_id', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}