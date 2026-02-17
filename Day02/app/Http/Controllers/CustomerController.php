<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function customerList(){
        $customer = Customer::all();
        echo json_encode($customer);
        exit;
    }
}
