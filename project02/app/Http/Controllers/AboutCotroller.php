<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AboutCotroller extends Controller
{
    public function index($lang){
        App::setLocale($lang);
        return view('about');
    }
}