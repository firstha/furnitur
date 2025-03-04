<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    protected $guarded = [''];
    
    public function category(){
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
