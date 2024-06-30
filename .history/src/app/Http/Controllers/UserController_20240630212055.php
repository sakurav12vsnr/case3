<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Item;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ItemsRequest;


class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();

        return view('profile', compact("user"));
    }

    public function updateProfile(Request $request)
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

    public function mypage()
    {
        $user = Auth::user();
        $items = Item::where('user_id', Auth::id())->get();

        return view('mypage', compact("user", "items"
    ));
    }
}
