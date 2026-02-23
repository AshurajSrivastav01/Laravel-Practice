<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

    public function login(Request $resquest){
        $resquest->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        dd($resquest->all());
    }

    public function index()
    {
        return view('login');
    }

    function queries(){
        // $result = DB::table('users')->get();
        // $result = DB::table('users')->where('email', 'sneha4@example.com')->get();
        // $result = DB::table('users')->first();
        // return $result;

        $result = DB::table('users')->insert([
            'name' => 'Ashuraj',
            'email' => 'ashuraj@gmail.com',
            'password' => Hash::make('12345'),
            'created_at' => 'NOW()',
            'updated_at' => 'NOW()'
        ]);

        if($result){
            echo json_encode([
                'status' => true,
                'message' => 'Data Inserted Successfully!'
            ]);
        }else{
            echo json_encode([
                'status' => false,
                'message' => 'Faild to Inserte Data!'
            ]);
        }
        exit;
    }
}