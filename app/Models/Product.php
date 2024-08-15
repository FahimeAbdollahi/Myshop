<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sellLines()
    {
        return $this->hasMany(SellLine::class);
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
}

