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

    public function sizes()
    {
        return $this->belongsToMany('App\Models\Size');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Models\Color');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
