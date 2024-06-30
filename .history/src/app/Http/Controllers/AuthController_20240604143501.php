<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postRegister(RegisterRequest $request)
    {
        try {
            User::create([
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect('/');
        } catch (\Throwable $th) {
            return redirect('register');
        }
    }


    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
