<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }

    public function upload(Request $request){
        $path = $request->file('file')->store('public');
        return $path;
        // dd($request->all());
    }
}
