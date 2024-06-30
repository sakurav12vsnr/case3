<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentView($item_id)
    {
        $item = Item::find($item_id);
        $comment = Like::where('user_id', Auth::id())->get();

        return view('comment', compact("item"));
    }
}
