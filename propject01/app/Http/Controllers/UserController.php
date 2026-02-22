<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegistration(){
        return view('registration');
    }

    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:10',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        dd($request->all());
    }
}
