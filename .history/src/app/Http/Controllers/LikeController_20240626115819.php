<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function create($item_id)
    {
        Like::create([
            'user_id' => Auth::id(),
            'item_id' => $item_id,
        ]);

        return redirect()->back();
    }

    public function unlike($item_id)
    {
        $like = Like::where('user_id', Auth::id())->where('item_id', $item_id)->first();
        $like->destroy();

        return redirect()->back();;
    }
}
