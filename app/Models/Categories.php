<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    protected $guarded = [''];
    public function products(): HasMany
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
