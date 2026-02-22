<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return "index!";
    }
    
    public function show(){
        return "show!";
    }
    
    public function add(){
        return "add!";
    }
    
    public function delete(){
        return "delete!";
    }
    
}
