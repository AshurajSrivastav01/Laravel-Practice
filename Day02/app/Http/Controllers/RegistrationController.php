<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('practice.registration');
    }

    public function registor(Request $request)
    {
        // dd($request->all());

        // array:7 [▼ // app/Http/Controllers/RegistrationController.php:16
        //     "_token" => "tw7kIeeJHvWwFMsyL4T6tHuuQmmHZtsqNdOSs43z"
        //     "full_name" => "egfergfre"
        //     "email" => "rooterwfref@gmail.cpm"
        //     "password" => "new_password"
        //     "confirm_password" => "sd'lcnw"
        //     "gender" => "Male"
        //     "terms" => "1"
        // ]

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'gender' => 'required',
            'terms' => 'required'
        ]);


    }
}
