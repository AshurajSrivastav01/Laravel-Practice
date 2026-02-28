<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    
    public function login(Request $request){
        try {
            //code...
            $validated = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string'
            ]);

            $user = User::where('email', $validated['email'])->first();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;

            if(!$user && !Hash::check($validated['password'], $user->password)){
                return response()->json([
                    "status" => false,
                    "message" => 'Enter Valid email or password!'
                ], 401);
            }else{
                return response()->json([
                    "status" => true,
                    "token" => $success['token'],
                    "message" => 'Log in Successfully!'
                ], 200);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                "data" => [],
                "message" => $th->getMessage()
            ], 500);
        }
    }

    public function signUp(Request $request)
    {
        try {

            $validated = $request->validate([
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6'
            ]);

            $validated['password'] = bcrypt($validated['password']);

            $user = User::create($validated);

            $success['token'] = $user->createToken('MyApp')->plainTextToken;

            return response()->json([
                "data" => $success,
                "message" => "User Registered Successfully"
            ], 201);

        } catch (\Throwable $th) {
            return response()->json([
                "data" => [],
                "message" => $th->getMessage()
            ], 500);
        }
    }
}   
