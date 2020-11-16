<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_subcategory','sub_category_id', 'product_id');
    }
}
