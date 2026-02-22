<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    function getPost(){
        $response = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NTUsInBob25lIjoiOTgxMTE2MTU2OSIsImlhdCI6MTc2NjQ5NDIzMCwiZXhwIjoxNzk4MDMwMjMwfQ.8EaiK0D666W7M2SUIJmvFXMWfS5bMpkDDL5673idTHs')
            ->get('http://eekcchutkimein.com:5000/admin/vendorsOrder?page=1');

        return $response->json();
    }
}
