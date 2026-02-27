<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Seller extends Model
{
    protected $fillable = ['name', 'email'];

    public function products()
    {
        return $this->hasMany(Product::class, 'seller_id');
    }
}
