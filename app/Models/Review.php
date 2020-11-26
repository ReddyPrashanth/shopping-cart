<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
