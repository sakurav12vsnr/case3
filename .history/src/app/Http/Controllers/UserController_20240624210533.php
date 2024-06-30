<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function mypage()
    {
        $user = Auth::user()
        
        return view('mypage');
    }

    public function profile()
    {
        $user = Auth::user();

        return view('profile', compact("user"));
    }

    public function updateProfile(Request $request, User $user)
    {
        $file = $request->file('img_url');
        if(!empty($file)) {
            $filename = $file->getClientOriginalName();
            $move = $file->move('images/', $filename);
        }else{
            $filename="";
        }

        $profile = new Profile();
        $profile->user_id = Auth::id();
        $profile->img_url = $filename;
        $profile->postcode = $request->postcode;
        $profile->address = $request->address;
        $profile->building = $request->building;
        $profile->save();

        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return redirect('mypage');
    }
}
