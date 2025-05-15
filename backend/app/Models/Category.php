<?php

namespace App\Models;

class Category {
    protected $table = 'categories';
    protected $fillable = ['name', 'status','created_at', 'updated_at'];
}