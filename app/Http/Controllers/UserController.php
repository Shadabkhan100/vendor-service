<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{

    public function register(Request $req)
    {
        try {
            $validatedData = $req->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'userType' => 'required|string',
                'isPremium' => 'required|boolean',
            ]);
            $validatedData['password'] = Hash::make($validatedData['password']);
            $user = User::create($validatedData);
            event(new Registered($user));
            if ($user) {
                auth()->login($user);
            }
            return redirect('/')
                ->with('success', 'User registered successfully');
        } catch (\Exception $e) {
            return redirect('/')
                ->with('error',  $e->getMessage());
        }
    }


    public function login(Request $req)
    {
        try {
            $validated_data = $req->validate([
                'email' => 'string|max:255',
                'password' => 'min:6'
            ]);
            if (!auth()->attempt($validated_data)) {
                return redirect('/')
                    ->with('error', 'Invalid credentials');
            } else {
                $user = auth()->user();
                $req->session()->regenerate();
                // $token = $user->createToken('Auth_Token')->plainTextToken;

                return redirect('/')
                    ->with('success', 'Login successful');
            }
        } catch (\Exception $e) {
            return redirect('/')
                ->with('error', 'Invalid credentials');
        }
    }

    public function logout(Request $req)
    {
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/')
            ->with('success', 'Logout successful');
    }
    public function index()
    {
        return response()->json(User::all());
    }
}
