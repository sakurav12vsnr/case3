<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(RegisterRequest $request)
    {
        try {
            User::create([
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ])
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
