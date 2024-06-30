<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facade\Hash;
use Illuminate\Support\Facade\Auth;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
