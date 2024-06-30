<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function create($item_id)
    {
        Like::like(Auth::id(), $item_id);
        return redirect()->back();
    }

    public function destroy($item_id)
    {
        Like::where('user_id', Auth::id())->where('item_id', $item_id)->destroy();
        return redirect()->
    }
}
