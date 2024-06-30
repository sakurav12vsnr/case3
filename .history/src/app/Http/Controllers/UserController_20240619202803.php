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

    public function updateProfile(Request $request){
        $file = $request->file('img_url');
        if(!empty($file)) {
            $filename = $file->getClientOriginalName();
            $move = $file->move('images/', $filename);
        }else{
            $filename="";
        }

        
    }
}
