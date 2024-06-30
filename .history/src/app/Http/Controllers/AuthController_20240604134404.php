<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
