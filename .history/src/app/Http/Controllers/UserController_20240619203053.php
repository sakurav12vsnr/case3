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

        $item = new Item();
        $item->img_url = $filename;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->user_id = Auth::id();
        $item->condition_id = $request->condition_id;
        $item->save();
    }
}
