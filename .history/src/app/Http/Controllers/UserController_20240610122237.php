<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function mypage()
    {
        return view('mypage');
    }

    public function profile()
    {
        return view('profile');
    }
}
