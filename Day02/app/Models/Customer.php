<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstname', 
        'lastname', 
        'phone_number', 
        'email', 
        'dob', 
        
        'password', 
        'address1', 
        'address2', 
        'pincode', 
        'city', 
        'state', 
        'country',

        'gender', 
        'status', 
        'created_at', 
        'updated_at' 
    ]; 
}
