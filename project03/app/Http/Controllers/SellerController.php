<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    public function sellerList(){
        return Seller::find(1)->products;
    }

    public function ManyToOne(){
        return Product::with('seller')->get();
    }
}
