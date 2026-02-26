<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'seller_id'];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
