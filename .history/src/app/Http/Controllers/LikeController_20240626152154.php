<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function create($item_id)
    {
        Like::like(Auth::id())

        return redirect()->back();
    }

    public function destroy($item_id)
    {
        Auth::user()->unlike($item_id);

        return redirect()->back();
    }
}
