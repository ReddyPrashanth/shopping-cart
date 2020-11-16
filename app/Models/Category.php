<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function mainCategory()
    {
        return $this->belongsTo('App\Models\MainCategory');
    }

    public function subCategories()
    {
        return $this->hasMany('App\Models\SubCategory', 'category_id');
    }
}
