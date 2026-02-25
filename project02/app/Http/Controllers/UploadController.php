<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }

    public function upload(Request $request){
        $path = $request->file('file')->storeAs('public', 'test1.pdf'); // Store the image
        $filenameArray = explode("/", $path);
        $filename = $filenameArray[1];
        return view('display', ['filename' => $filename]);
    }
}
