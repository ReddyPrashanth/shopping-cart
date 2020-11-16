<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at', 'pivot'];

    public function subCategories()
    {
        return $this->belongsToMany('App\Models\SubCategory', 'product_subcategory', 'product_id', 'sub_category_id', );
    }
}
