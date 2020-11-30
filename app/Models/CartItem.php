<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    public function cart()
    {
        return $this->belongsTo('App\Models\CartItem');
    }

    public function product() 
    {
        return $this->belongsTo('App\Models\Product');
    }
}
