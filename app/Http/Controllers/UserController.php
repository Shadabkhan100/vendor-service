<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
      public function register(Request $req){
        try {
            $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'userType' => 'required|string',
            'isPremium' => 'required|boolean',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = \App\Models\User::create($validatedData);
        event(new \Illuminate\Auth\Events\Registered($user));
        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);   
        } catch (\Exception $e) {
            return response()->json(['message' => 'Registration failed', 'error' => $e->getMessage()], 500);
        }
      
    }
    public function login(Request $req){
        try {
            $credentials = $req->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            if (!auth()->attempt($credentials)) {
                return response()->json(['message' => 'Invalid credentials'], 401);
            }

            $user = auth()->user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(['message' => 'Login successful', 'access_token' => $token, 'token_type' => 'Bearer']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Login failed', 'error' => $e->getMessage()], 500);
        }
    }
    public function index()
    {
        return response()->json(User::all());
    }

}
